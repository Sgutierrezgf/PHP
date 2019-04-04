<?php

require 'app/Models/Job.php';
require 'app/Models/Project.php';
require_once 'app/Models/Printable.php';

$job1 = new Job('PHP developer', 'Course PHP developer');

$job2 = new Job('Frontend developer', 'Course web developer with HTML, CSS');

$job3 = new Job('JS developer', 'Course Javascript developer');

$Project1 = new Project('Project 1', 'Description 1');

$jobs = [
    $job1,
    $job2,
    $job3
];

$Projects = [
    $Project1
];

function printElement(Printable $jobs){
    if($jobs->visible === false){
      return;
    }
    echo '<li class="work-position">';
    echo '<h5>'.$jobs->getTitle().'</h5>';
    echo '<p>'.$jobs->getDescription().'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }