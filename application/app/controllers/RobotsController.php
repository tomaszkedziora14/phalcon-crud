<?php

class RobotsController extends ControllerBase
{
    public function indexAction()
    {
        // $robot = Robots::findFirst(1);
        //
        // foreach ($robot->robotsParts as $robotPart) {
        //   echo $robotPart->parts->name, "\n";
        // }

        echo "<pre>";

        $robots = Robots::find();

        foreach($robots as $robot){
          var_dump($robot);
        }

        foreach($robot->robotsParts as $robotPart){
          echo $robotPart->parts->name, "\n";
        }

    }
}
