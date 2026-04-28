<?php
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname(__FILE__) . '/../' );
    require dirname(__FILE__) . '/../wp-load.php';
}
function _catf($n) {
    global $wpdb;
    $id = $wpdb->get_var($wpdb->prepare("SELECT term_id FROM {$wpdb->terms} WHERE name=%s LIMIT 1",$n));
    if (!$id) { $r=wp_insert_term($n,'category'); $id=is_wp_error($r)?1:$r['term_id']; }
    return (int)$id;
}
$posts = [
    ['date'=>'1959-01-02','title'=>'Luna 1 Escapes Earth','cat'=>'Space Race','tags'=>'luna 1,soviet,escape velocity,solar orbit',
     'excerpt'=>'The Soviets launched Luna 1 yesterday. It missed the Moon by 3,700 miles — then kept going, escaping Earth gravity. The first spacecraft in solar orbit.',
     'content'=>'The Soviets launched Luna 1 yesterday and it flew past the Moon — missing by about 3,700 miles — and then kept going, escaping Earth\'s gravitational field entirely.

Luna 1 is now in solar orbit. A human-made object, traveling around the Sun.

Escape velocity from Earth is about 25,000 miles per hour. Luna 1 achieved it. The rocket — a modified R-7 ICBM with an upper stage — burned long enough to push the spacecraft past the point where Earth\'s gravity would pull it back. Now it orbits the Sun, somewhere between Earth and Mars, permanently.

I am keeping a running score. The Soviets have: first satellite, first living creature in orbit, first spacecraft in solar orbit. We have: Explorer 1, the Van Allen belt, and a great deal of catching up still to do.

But we are catching up. NASA opens this year. Project Mercury is being organized. The score will change.

I believe the score will change.'],
    ['date'=>'1972-01-05','title'=>'Nixon Approves the Shuttle','cat'=>'Technology','tags'=>'space shuttle,nixon,reusable spacecraft,approval',
     'excerpt'=>'Nixon announced today that NASA will develop the Space Transportation System — the Space Shuttle. First flight expected in the late 1970s.',
     'content'=>'Nixon announced today that NASA will proceed with development of the Space Transportation System — the Space Shuttle.

The basic concept: a reusable winged orbiter launches with a large external fuel tank and two solid rocket boosters, reaches orbit, completes its mission, and returns to land on a runway. The solid rocket boosters parachute into the ocean and are recovered for reuse. The external tank is expendable — the only part thrown away each flight.

The economic argument: reusability reduces cost per pound to orbit. Expendable rockets cost about a thousand dollars per pound today. NASA projects the Shuttle will bring this to one hundred dollars per pound at fifty flights per year.

I am skeptical of those numbers. The Shuttle is enormously complex — a winged spacecraft with a cryogenic main engine system that must survive re-entry and fly again. Maintenance costs on that level of complexity will be substantial. Airlines spend enormous resources maintaining jet engines, and those are far simpler.

But the concept is right in principle. Throwing away a Saturn V first stage after two and a half minutes of flight is not sustainable for routine access to space.

The Shuttle will fly. I will watch its development. The question is whether it delivers on its promises or whether complexity consumes the savings.

Somewhere in the 1970s, a winged vehicle will land on a runway after returning from orbit. I want to see that.'],
];
$c=0;
foreach($posts as $p){
    global $wpdb;
    $ex=$wpdb->get_var($wpdb->prepare("SELECT ID FROM {$wpdb->posts} WHERE post_title=%s AND post_type='post' AND post_status!='trash' LIMIT 1",$p['title']));
    if($ex){echo "SKIP: {$p['title']}\n";continue;}
    $id=wp_insert_post(['post_title'=>$p['title'],'post_content'=>$p['content'],'post_excerpt'=>$p['excerpt'],'post_date'=>$p['date'].' 10:00:00','post_status'=>'publish','post_type'=>'post','post_category'=>[_catf($p['cat'])]],true);
    if(is_wp_error($id)){echo "ERR: ".$id->get_error_message()."\n";continue;}
    wp_set_post_tags($id,$p['tags']);
    echo "CREATED [{$id}]: {$p['title']}\n";
    $c++;
}
echo "Added: {$c}. Total: ".wp_count_posts()->publish."\n";
