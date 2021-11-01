<?php

class RobotsController extends ControllerBase
{
    public function indexAction()
    {
        $robot = Robots::findFirst(1);

        foreach ($robot->robotsParts as $robotPart) {
          echo $robotPart->parts->name, "\n";
        }
    }
}
