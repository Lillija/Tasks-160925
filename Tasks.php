<?php
class Task{
    public $id;
    public $content;

    public function __construct($id, $content){
        $this->id = $id;
        $this->content = $content;
    }

    public function display(){
        echo "\n $this->content \n";
    }
}
$tasks = [
    new Task(0, "Yappa"),
    new Task(1, "Yappa yappa"),
    new Task(2, "AAAAAAAAAAA")
];

function show($inpTasks){
    foreach($inpTasks as $task){
        $task->display();
    }
}
function addTask(&$inpTasks){
    $newContent = readline("Enter a new task: ");
    $newId = count($inpTasks);
    $inpTasks[] = new Task($newId, $newContent);
};
function deleteTask(&$inpTasks){
$taskNum = readline("Which id do you wish to delete? \n");
unset($inpTasks[$taskNum]);
$inpTasks = array_values($inpTasks);
};
while (true){
    $input = readline("1 = show all tasks, 2 = add a new task, 3 = deletetask, n to exit \n");
    switch($input){
        case "n":
           echo "You have exited \n";
            exit;
        case 1:
            echo "Show all tasks \n";
            show($tasks);
            echo "---- Tasks have been shown \n";
            break;
        case 2:
            echo "Make a new task \n";
            addTask($tasks);
            echo "---- Task has been made \n";
            break;
        case 3:
            echo "Delete a task \n";
            deleteTask($tasks);
            echo "---- Task has been deleted \n";
    }
}