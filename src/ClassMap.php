<?php

namespace Easyatwork\Signicat;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'add-notification-request' => '\\Easyatwork\\Signicat\\StructType\\Add_notification_request',
            'add-task-request' => '\\Easyatwork\\Signicat\\StructType\\Add_task_request',
            'add-task-response' => '\\Easyatwork\\Signicat\\StructType\\Add_task_response',
            'create-artifact-request' => '\\Easyatwork\\Signicat\\StructType\\Create_artifact_request',
            'create-artifact-response' => '\\Easyatwork\\Signicat\\StructType\\Create_artifact_response',
            'create-request-request' => '\\Easyatwork\\Signicat\\StructType\\Create_request_request',
            'create-request-response' => '\\Easyatwork\\Signicat\\StructType\\Create_request_response',
            'create-usersession-request' => '\\Easyatwork\\Signicat\\StructType\\Create_usersession_request',
            'create-usersession-response' => '\\Easyatwork\\Signicat\\StructType\\Create_usersession_response',
            'delete-request-request' => '\\Easyatwork\\Signicat\\StructType\\Delete_request_request',
            'delete-request-response' => '\\Easyatwork\\Signicat\\StructType\\Delete_request_response',
            'disable-notification-request' => '\\Easyatwork\\Signicat\\StructType\\Disable_notification_request',
            'disable-task-request' => '\\Easyatwork\\Signicat\\StructType\\Disable_task_request',
            'find-tasks-request' => '\\Easyatwork\\Signicat\\StructType\\Find_tasks_request',
            'find-tasks-response' => '\\Easyatwork\\Signicat\\StructType\\Find_tasks_response',
            'get-packaging-task-status-request' => '\\Easyatwork\\Signicat\\StructType\\Get_packaging_task_status_request',
            'get-packaging-task-status-response' => '\\Easyatwork\\Signicat\\StructType\\Get_packaging_task_status_response',
            'get-request-history-request' => '\\Easyatwork\\Signicat\\StructType\\Get_request_history_request',
            'get-request-history-response' => '\\Easyatwork\\Signicat\\StructType\\Get_request_history_response',
            'get-request-request' => '\\Easyatwork\\Signicat\\StructType\\Get_request_request',
            'get-request-response' => '\\Easyatwork\\Signicat\\StructType\\Get_request_response',
            'get-status-request' => '\\Easyatwork\\Signicat\\StructType\\Get_status_request',
            'get-status-response' => '\\Easyatwork\\Signicat\\StructType\\Get_status_response',
            'get-task-count-request' => '\\Easyatwork\\Signicat\\StructType\\Get_task_count_request',
            'get-task-count-response' => '\\Easyatwork\\Signicat\\StructType\\Get_task_count_response',
            'get-task-request' => '\\Easyatwork\\Signicat\\StructType\\Get_task_request',
            'get-task-response' => '\\Easyatwork\\Signicat\\StructType\\Get_task_response',
            'set-client-status-request' => '\\Easyatwork\\Signicat\\StructType\\Set_client_status_request',
            'notification' => '\\Easyatwork\\Signicat\\StructType\\Notification',
            'schedule' => '\\Easyatwork\\Signicat\\StructType\\Schedule',
            'wait' => '\\Easyatwork\\Signicat\\StructType\\Wait',
            'task-filter' => '\\Easyatwork\\Signicat\\StructType\\Task_filter',
            'task-filter-criteria' => '\\Easyatwork\\Signicat\\StructType\\Task_filter_criteria',
            'packaging-task-status-info' => '\\Easyatwork\\Signicat\\StructType\\Packaging_task_status_info',
            'packaging-document-status' => '\\Easyatwork\\Signicat\\StructType\\Packaging_document_status',
            'user-session' => '\\Easyatwork\\Signicat\\StructType\\User_session',
            'session-task-info' => '\\Easyatwork\\Signicat\\StructType\\Session_task_info',
            'task' => '\\Easyatwork\\Signicat\\StructType\\Task',
            'subject' => '\\Easyatwork\\Signicat\\StructType\\Subject',
            'attribute' => '\\Easyatwork\\Signicat\\StructType\\Attribute',
            'dialog' => '\\Easyatwork\\Signicat\\StructType\\Dialog',
            'document-action' => '\\Easyatwork\\Signicat\\StructType\\Document_action',
            'document' => '\\Easyatwork\\Signicat\\StructType\\Document',
            'form' => '\\Easyatwork\\Signicat\\StructType\\Form',
            'form-param' => '\\Easyatwork\\Signicat\\StructType\\Form_param',
            'sds-document' => '\\Easyatwork\\Signicat\\StructType\\Sds_document',
            'provided-document' => '\\Easyatwork\\Signicat\\StructType\\Provided_document',
            'packaging-result-document' => '\\Easyatwork\\Signicat\\StructType\\Packaging_result_document',
            'archive-document' => '\\Easyatwork\\Signicat\\StructType\\Archive_document',
            'result-document' => '\\Easyatwork\\Signicat\\StructType\\Result_document',
            'upload-document' => '\\Easyatwork\\Signicat\\StructType\\Upload_document',
            'authentication' => '\\Easyatwork\\Signicat\\StructType\\Authentication',
            'signature' => '\\Easyatwork\\Signicat\\StructType\\Signature',
            'method' => '\\Easyatwork\\Signicat\\StructType\\Method',
            'authentication-based-signature' => '\\Easyatwork\\Signicat\\StructType\\Authentication_based_signature',
            'request' => '\\Easyatwork\\Signicat\\StructType\\Request',
            'sender' => '\\Easyatwork\\Signicat\\StructType\\Sender',
            'packaging-task' => '\\Easyatwork\\Signicat\\StructType\\Packaging_task',
            'packaging-task-document' => '\\Easyatwork\\Signicat\\StructType\\Packaging_task_document',
            'task-info' => '\\Easyatwork\\Signicat\\StructType\\Task_info',
            'task-status-info' => '\\Easyatwork\\Signicat\\StructType\\Task_status_info',
            'document-status' => '\\Easyatwork\\Signicat\\StructType\\Document_status',
            'event' => '\\Easyatwork\\Signicat\\StructType\\Event',
            'document-data' => '\\Easyatwork\\Signicat\\StructType\\Document_data',
        );
    }
}
