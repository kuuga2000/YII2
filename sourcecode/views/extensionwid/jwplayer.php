<?php
$this->widget('ext.jwplayer.Jwplayer',array(
    'width'=>'auto',
    'height'=>360,
    'file'=>'/assets/videos/video.mp4', // the file of the player, if null we use demo file of jwplayer
    //'image'=>'/assets/videos/Wildlife.wmv', // the thumbnail image of the player, if null we use demo image of jwplayer
    //'image'=>null,
    'options'=>array(
        'controlbar'=>'bottom'
    )
));
$this->widget('ext.EjwPlayer.EjwPlayer',array(
    'width' => 1280,
    'height' => 720,
    'title' => 'My Test Video',
    'controls' => 'false',
    'playlist' => array(
        
        array(
            'image' => 'https://eduk-videos.s3.amazonaws.com/sey/2012-09-29/js-speaker5-preview.jpg',
            'sources' => array(
                array('file' => null, 'height' => 270),
                //array('file' => '/videos/sample2-720.mp4', 'height' => 720),
            )
        ),
    ),
)); 
?>
