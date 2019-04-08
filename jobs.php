<?php



use App\Models\{Job, Project};

$jobs = Job::all();

$Project1 = new Project('Project 1', 'Description 1');

$Projects = [
    $Project1
];

function printElement($jobs){
    // if($jobs->visible === false){
    //   return;
    // }
    echo '<li class="work-position">';
    echo '<h5>'.$jobs->title.'</h5>';
    echo '<p>'.$jobs->description.'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }