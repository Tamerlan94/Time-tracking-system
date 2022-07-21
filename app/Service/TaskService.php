<?php

namespace App\Service;

use App\Models\Task;

class TaskService
{
    public function changeStatus($task_id, $status_id){
        Task::query()
            ->find($task_id)
            ->update([
               'status_id' => $status_id
            ]);
    }
}
