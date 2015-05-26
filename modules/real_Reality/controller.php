<?php

class real_RealityController extends SugarController
{
    function action_My()
    {
        // получаем объект текущего пользователя
        global $current_user;

        // Возвращает массив с названиями ролей для конкретного пользователя
        //$user_role_names = ACLRole::getUserRoleNames($current_user->id);

        // Возвращает массив массивов представлений ролей ACL (при true) или массив ACLRoles.
        //$all_roles = ACLRole::getAllRoles(true);

        // Возвращает массив модулей с их действиями.
        //$role_id = '885cbcd6-e8e1-b906-98c4-5487ffa49ed4';
        //$role_actions = ACLRole::getRoleActions($role_id);

        // Устанавливает связь между ролью и действием, и устанавливает уровень доступа.
        //ACLRole::setAction($role_id, $action_id, $access);

        // Удаляет связь между ролью и всеми, связанными с ней, действиями.
        //$role_id = '885cbcd6-e8e1-b906-98c4-5487ffa49ed4';
        //ACLRole::mark_relationships_deleted($role_id);

        // Возвращает список пользовательских действий
        $user_actions = ACLAction::getUserActions($current_user->id,false,'real_Reality','module');


        echo '<pre>';
        print_r($user_actions);
        echo '</pre>';

        // получаем роли пользователя по его id
        $user_roles = ACLRole::getUserRoles($current_user->id);

        // проверяем есть ли у него необходимая роль для этого действия
        $checkRole = false;
        if(!empty($user_roles)){
            foreach($user_roles as $name){
                if($name == 'роль1'){
                    $checkRole = true;
                }
            }
        }

        // В зависимости от роли отображаем нужную вьюшку
        if($checkRole){
            // если есть доступ
            $this->view = 'my';
        } else {
            // если нет доступа
            $this->view = 'noaccess';
        }
    }

    function action_Ajaxtest(){
        $this->view = 'ajaxtest';
    }

    function action_tpl(){
        $this->view = 'tpl';
    }
}