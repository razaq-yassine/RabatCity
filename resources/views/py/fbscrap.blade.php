<?php

//exec("ail
// -r ../resources/views/py/requirements.txt");
$var = 'exec("python  ../resources/views/py/facebookScrap.py");';
$text=base64_decode($var);
$text=strval($text);
//$a=explode(":",$text);
//is_array($text);
//echo $text;
$texts=array();
$images=array();
$dates=array();
$ids=array();
$post=array();
$lignes = explode("}||{",$text);
for ($i = 0 ; $i<count($lignes)-1;$i++)
$post[$i]= explode(" || ",$lignes[$i]);
for ($i=0 ; $i<count($lignes)-1;$i++)
{$texts[$i]=$post[$i][0];
$images[$i]=$post[$i][1];
$dates[$i]=$post[$i][2];
$ids[$i]=$post[$i][3];}
?>
<!--  -->
    <!-- Section Tittle -->
    <div class="small-tittle mb-20">
        <h4>Most Recent</h4>
    </div>
    <!-- Details -->
    <div class="most-recent mb-40">
        <div class="most-recent-img">
            <img src="{{$images[1] ?? ''}}" alt="">
            <div class="most-recent-cap">
                <span class="bgbeg">Facebook</span>
                <h4><a href="https://www.facebook.com/Conseil.Arrondissement.Agdal.Ryad/posts/{{$ids[1] ?? '' }}"><?php
                        echo substr($texts[1] ?? '', 0, 100);
                        ?>...</a></h4>
                <p>{{$dates[1] ?? ''}}</p>
            </div>
        </div>
    </div>
    <!-- Single -->
    @for($i=2;$i<5;$i++)
    <div class="most-recent-single">
        <div class="most-recent-images">
            <a href="https://www.facebook.com/Conseil.Arrondissement.Agdal.Ryad/posts/{{$ids[$i] ?? ''}}">
                <img style="max-width: 6em;" src="{{$images[$i] ?? ''}}" alt=""></a>
        </div>
        <div class="most-recent-capt">
            <h4><a href="https://www.facebook.com/Conseil.Arrondissement.Agdal.Ryad/posts/{{$ids[$i] ?? ''}}"><?php
                    echo substr($texts[$i] ?? '', 0, 100);
                    ?></a></h4>
            <p>{{$dates[$i] ?? ''}}</p>
        </div>
    </div>
    @endfor
