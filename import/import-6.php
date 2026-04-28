<?php
/**
 * Apollo Blog Import - File 6
 * Posts: Apollo 7, Apollo 8, 1968 cultural context
 * Run via: ddev wp eval 'require "/var/www/html/import/import-6.php";'
 */

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname(__FILE__) . '/../' );
    require dirname(__FILE__) . '/../wp-load.php';
}

function get_category_id_6( $name ) {
    global $wpdb;
    $id = $wpdb->get_var( $wpdb->prepare(
        "SELECT term_id FROM {$wpdb->terms} WHERE name = %s LIMIT 1", $name
    ) );
    if ( ! $id ) {
        $result = wp_insert_term( $name, 'category' );
        $id = is_wp_error($result) ? 1 : $result['term_id'];
    }
    return (int) $id;
}

$posts = [

    [
        'date'     => '1968-01-22',
        'title'    => 'The World Is on Fire',
        'category' => 'Personal',
        'tags'     => 'vietnam,1968,politics,tet offensive,protest',
        'excerpt'  => 'The war is everything in the papers right now. The Tet Offensive started last week and nobody sounds certain about anything anymore.',
        'content'  => <<<'EOT'
I need to write about the war because it's everything in the papers right now and I can't pretend it's not happening.

The Tet Offensive started last week. North Vietnamese and Viet Cong forces launched coordinated attacks across South Vietnam — including on Saigon itself, including on the American embassy compound. The embassy attack has been particularly shocking: we've been told repeatedly that we're winning, that progress is being made, that the enemy is being broken. And then the enemy attacks the embassy in the capital.

I'm not a hawk or a dove exactly. I'm a man in Ohio who has been watching the war the way I watch the space program — from the outside, with limited information, trying to understand what's actually happening from public reporting that may not be complete. I have friends who have sons in Vietnam. Harold's nephew is over there. I know families who are waiting.

What connects this to the space program — the reason I'm writing about it here — is that I keep noticing the contrast in my newspaper's front section. One column: the Tet Offensive, 543 American soldiers killed last week, a war we might not be winning that we were told we were winning. Next column: the Apollo program, the unmanned lunar module test, the upcoming crewed mission, the methodical pursuit of an impossible goal that seems to be actually getting somewhere.

Both represent enormous national effort. Both are consuming lives and money. One feels like it's going somewhere. One feels like it might not be.

I haven't said publicly which side I fall on regarding the war. I won't start now. But I notice that when I think about the space program I feel hope, and when I think about Vietnam I feel something more like dread. The two compete for the same column inches and the same national attention, and I know which one I want to be reading about.

Betty's nephew has a deferment because he's in college. We were relieved when he got in, and then relieved again when we found out deferment applied. I felt guilty about the relief. A lot of families don't have that option.

The Apollo 5 unmanned lunar module test is next week. I'm going to try to focus on that.
EOT
    ],

    [
        'date'     => '1968-04-05',
        'title'    => 'April',
        'category' => 'Personal',
        'tags'     => 'mlk assassination,1968,grief,national crisis',
        'excerpt'  => 'Martin Luther King was shot and killed in Memphis yesterday. I don\'t have words for this.',
        'content'  => <<<'EOT'
Martin Luther King was shot and killed in Memphis yesterday.

I don't have words for this.

I've been keeping this notebook since 1957 as a record of the space race. I keep writing about things happening in the country because the space program doesn't happen in a vacuum — it happens in America, in the 1960s, which is a decade that cannot stop breaking things and breaking people.

Kennedy in Dallas. Grissom, White, and Chaffee on a launch pad. Komarov falling from space. Now King in Memphis.

I've been sitting with the fact that I write about rockets here and not about civil rights, which is a choice and a kind of selective attention that I think says something about who I am and who I've been. A middle-class white man in Ohio watching the space program, setting aside the other news, telling myself I'll write about that in some other notebook.

I don't have another notebook. This is it. And Martin Luther King is dead and the cities are burning tonight and it seems wrong to pretend that the only thing happening in America is the Moon program.

The Moon program is about humanity's potential. About what people can build and learn and do and reach for. King spent his life on a version of the same question: what can people build, what are we capable of, what do we owe each other in a country that declared all men created equal and then spent two centuries making exceptions.

I don't know how to hold both of these at once. The extraordinary achievement that is Project Apollo and the ordinary failures that are burning in Harlem and Chicago and Washington tonight. Both are America. Both are real.

I'm going to keep writing about the space program. It matters and I love it and it's what I've been doing. But I'm going to stop pretending that nothing else is happening.

Tomorrow I'll probably write about Apollo 6. Tonight I can't.
EOT
    ],

    [
        'date'     => '1968-04-04',
        'title'    => 'Apollo 6 — The Saturn V Bounces',
        'category' => 'Apollo Program',
        'tags'     => 'apollo 6,saturn v,pogo,engine failure,unmanned test',
        'excerpt'  => 'Apollo 6 flew yesterday, and it was not the clean second Saturn V test everyone hoped for. The rocket experienced severe oscillation and engine failures.',
        'content'  => <<<'EOT'
Apollo 6 flew yesterday, and it was not the clean second Saturn V test that everyone hoped for.

The Saturn V experienced severe "pogo" oscillation during the first stage burn — a longitudinal vibration that built up resonance between the rocket's structure and the propellant flow, amplifying until the vibration was severe enough to damage equipment. The oscillation reached amplitudes that would have injured a crew. This is a known phenomenon; engineers had been working on it, but apparently hadn't fully solved it.

Then two J-2 engines on the second stage shut down early — engine failures, leaving the remaining three to burn longer to compensate. The third stage engine also had problems and could not re-ignite for the translunar injection test.

Despite all of this, the command module survived and successfully splashed down. The heat shield performed. The spacecraft itself held up through a test flight that had three engine failures and violent structural vibration.

This is not good. This is not catastrophic either — it's an unmanned test, no crew was at risk, and the problems were discovered in exactly the environment designed to discover them. But it means there is more work to do on the Saturn V before we can fly people on it.

The pogo oscillation is the more serious problem. Engineers are working on dampener valves in the propellant feeds to break up the resonance. The engine failures appear to be related to loose fittings in the hydrogen propellant system — a design fix.

I'm trying to balance two things: the genuine concern that the Saturn V still has significant problems, and the understanding that this is exactly why you do unmanned tests. You fly the unmanned test, you find the problems, you fix them, and the crew that flies months later benefits from the discoveries.

Apollo 7 is still planned for this fall with Schirra, Eisele, and Cunningham. Whether that timeline holds depends on how quickly the Saturn V fixes can be validated. Apollo 7 doesn't use a Saturn V anyway — it uses the smaller Saturn IB for Earth orbit. The next Saturn V crewed flight would be Apollo 8.

One problem at a time. Fix the pogo. Fix the engine fittings. Fly again.

That's the program. That's always been the program.
EOT
    ],

    [
        'date'     => '1968-06-06',
        'title'    => 'June Again',
        'category' => 'Personal',
        'tags'     => 'rfk assassination,1968,grief,politics',
        'excerpt'  => 'Robert Kennedy was shot two nights ago and died yesterday morning. I can\'t stop thinking about the phone call to Jackie Kennedy they must have made.',
        'content'  => <<<'EOT'
Robert Kennedy was shot two nights ago in Los Angeles and died yesterday morning.

I can't stop writing about things that aren't the space program. But I can't not write about them either.

1968 is a year I will tell my children about, if Betty and I have children, as a year when America seemed to be coming apart at the seams. King in April. Kennedy in June. The war still going. Cities burning. And somewhere in the middle of all of it, a group of extraordinarily focused people in Houston and Huntsville and Cape Canaveral are methodically building the machine that will take three human beings to the Moon.

I keep thinking about what it means to do that work in this year. The engineers and astronauts and flight controllers are not in a vacuum. They read the same newspapers I do. They have sons and nephews and opinions about the war. They saw King die, and now Kennedy. How do you go to work on the guidance computer or the heat shield tiles or the astronaut training schedule and hold the rest of the world at arm's length?

Maybe they don't. Maybe they can't. Maybe the space program is partly what keeps some of them sane — the certainty of physics, the definability of an engineering problem, the clarity of a goal.

Here is what I know: sometimes when I'm very anxious about the news — the war, the assassinations, the sense that the country has lost its footing — I think about the specific, concrete, solvable problems of the Moon program. The pogo oscillation in the Saturn V. The hatch redesign. The navigation software. These are hard problems with solutions that exist. If you're smart enough and you work hard enough, you find the solution and the rocket stops bouncing and the hatch opens in seven seconds and the crew comes home.

The world's other problems don't work like that. There's no engineering solution to hatred or grief or a war you can't end.

But there is one to getting to the Moon. And I'm going to keep believing in that. Not as a distraction from the real world. As evidence that the real world, despite everything, is still capable of doing extraordinary things.

Bobby Kennedy was 42 years old.

Tomorrow I'll write about Apollo. Tonight I can't again.
EOT
    ],

    [
        'date'     => '1968-08-15',
        'title'    => 'The Soviets and the Zond',
        'category' => 'Space Race',
        'tags'     => 'zond,soviet,lunar flyby,space race,competition',
        'excerpt'  => 'Zond 5 launched last week on what looks very much like a crewed lunar mission rehearsal. Are the Soviets about to put cosmonauts around the Moon before we get there?',
        'content'  => <<<'EOT'
Zond 5 launched last week on a trajectory that takes it around the Moon and back to Earth. It's unmanned — confirmed unmanned, we're told — but the Zond spacecraft is a modified Soyuz designed for exactly the crew capacity needed for a lunar flyby.

This is the preparation. If Zond 5 succeeds — if it flies around the Moon and returns — then the next Zond mission could carry cosmonauts. A Soviet manned lunar flyby before Apollo can get there.

The Soviets have been working toward this in pieces: unmanned Zond tests, Earth-orbital Soyuz tests, cosmonaut training. They've been quieter about their program than we have been about ours — Soviet space program announcements come after the success, not before, which means we're often surprised by what they've accomplished.

There is reportedly serious discussion at NASA about accelerating Apollo 8, which was originally planned as an Earth-orbital test of the command and service module. The accelerated version would skip the near-Earth testing and send Apollo 8 directly into lunar orbit — a bold move, maybe a desperate one, to get Americans to the Moon first even if it means more risk.

I've been sitting with the idea of sending Apollo 8 to lunar orbit before the lunar module is ready, before anyone has actually landed on the Moon, before the full mission profile has been tested. It's audacious. It's also the kind of thing that ends in tragedy if something goes wrong.

But here's the strategic calculation: if the Soviets fly a crewed lunar flyby first, the "race to the Moon" narrative changes. The first people to see the Moon up close are Soviets. The first pictures of Earth from the Moon are Soviet pictures. The first voices from lunar distance are Soviet voices. Even if we land first — which is the harder thing and the thing that matters more — some of the glory is gone.

I understand why NASA might want to prevent that. I'm not sure I agree that preventing it justifies the risk. But I'm an insurance adjuster in Ohio, not a flight director.

Zond 5 is on its way around the Moon right now. There are living things aboard — turtles, some bacteria, seeds — as a biological test. It will return to Earth in about a week.

If it returns safely, the pressure on NASA to get to lunar orbit fast is going to intensify considerably.

I'm watching.
EOT
    ],

    [
        'date'     => '1968-09-21',
        'title'    => 'Zond 5 Returns',
        'category' => 'Space Race',
        'tags'     => 'zond 5,soviet,lunar flyby,turtles,space race',
        'excerpt'  => 'Zond 5 splashed down in the Indian Ocean yesterday, returning from a flyby of the Moon. The turtles aboard survived. The competition just got very real.',
        'content'  => <<<'EOT'
Zond 5 splashed down in the Indian Ocean yesterday after flying around the Moon and returning. The spacecraft carried turtles, worm eggs, plants, bacteria, seeds, and other biological specimens. The turtles survived. They lost some weight, apparently, but they're alive.

Turtles flew around the Moon and came back alive. I keep repeating that to myself.

The Soviets have demonstrated they can send a capsule on a free-return trajectory — the kind that Apollo will use, swinging around the Moon and coming back to Earth without a powered lunar orbit insertion. The spacecraft was unmanned but the biology aboard confirms that living things can survive the radiation and acceleration and weightlessness of such a flight.

There was also voice radio traffic picked up by ham radio operators during Zond 5's flight that was reported to sound like human speech. The Soviets denied cosmonauts were aboard; Western intelligence analysis was uncertain. I'll go with the official report — unmanned — while acknowledging that we don't always get the true story from Moscow about what's aboard their spacecraft.

Here's the state of the race as I understand it: Apollo 7 is scheduled for October, the first crewed Apollo mission. If that goes well, NASA has to decide whether Apollo 8 goes to the Moon or stays in Earth orbit. The pressure to go to the Moon first is now considerable.

Frank Borman, Jim Lovell, and Bill Anders have been training for Apollo 8. They knew for months it might be a lunar orbit mission. The decision reportedly isn't final yet — it depends on Apollo 7's success. But from the outside, it seems like NASA is going to go for it.

Borman, Lovell, and Anders going around the Moon in December.

The year 1968 — the year America nearly broke, the year King and Kennedy died, the year the war got more confusing — might end with American astronauts seeing the Moon up close for the first time in human history.

I barely dare to think it. I'm going to think it anyway.
EOT
    ],

    [
        'date'     => '1968-10-11',
        'title'    => 'Apollo 7 — We\'re Back',
        'category' => 'Apollo Program',
        'tags'     => 'apollo 7,schirra,eisele,cunningham,first crewed apollo,saturn ib',
        'excerpt'  => 'Wally Schirra, Donn Eisele, and Walter Cunningham are in space right now. The first crewed Apollo mission launched this morning and it looks good.',
        'content'  => <<<'EOT'
Wally Schirra, Donn Eisele, and Walter Cunningham are in space right now.

Apollo 7 launched this morning at 11:02 AM from Cape Canaveral, on a Saturn IB (not the full Saturn V — this is an Earth-orbital test of the command and service module only). They're going to spend eleven days in orbit, testing the redesigned Block II command module, the service propulsion engine, the guidance and navigation systems, everything that has to work before anyone can go to the Moon.

I am aware that I am sitting in my house in Ohio watching television coverage of something that has been twenty-one months coming since the fire. The redesigned capsule. The new hatch. The improved wiring. The flame-retardant materials. Everything that Grissom said needed to be better, rebuilt, redesigned, proven.

The crew is in it. The crew is fine. The launch was clean.

Schirra has been famously difficult about the Apollo program timeline — he has not been quiet about his concerns regarding spacecraft readiness, about the pressure to rush, about management decisions he disagreed with. He announced before Apollo 7 that this would be his last flight. He is done after this mission, he said. Three spaceflights — Mercury, Gemini, Apollo — and then he's going to let the younger men take over.

For this mission: he is exactly the right commander. He is meticulous and experienced and demanding, and if he is satisfied with how this spacecraft performs, that means something.

Eleven days to go. They'll check the systems, fire the service propulsion engine multiple times, conduct a rendezvous with the spent Saturn IB second stage, do navigation star sightings, test the guidance computer. Every piece has to work.

Betty came in from the garden this morning when I was watching the launch countdown. She sat next to me and held my hand when the rocket lifted off. Neither of us said anything. After a while she went back to her garden and I stayed in front of the television.

This is the first step back after the worst thing the program has experienced. I believe in it. I am relieved.

We're back.
EOT
    ],

    [
        'date'     => '1968-10-22',
        'title'    => 'Schirra\'s Cold and a Successful Mission',
        'category' => 'Apollo Program',
        'tags'     => 'apollo 7,splashdown,success,schirra cold,helmets,recovery',
        'excerpt'  => 'Apollo 7 splashed down safely today after eleven days in orbit. The mission was successful. Schirra had a terrible head cold the whole time.',
        'content'  => <<<'EOT'
Apollo 7 splashed down safely today after eleven days in orbit. The mission was successful — all major test objectives accomplished, the redesigned command module vindicated.

Schirra had a terrible head cold for most of the mission, and this produced the one genuine incident of the flight: a dispute with Mission Control about wearing helmets during re-entry.

The background: when you have a head cold in space, the normal pressure equalization you'd do on an airplane (swallowing, yawning) doesn't work properly because of the mucus congestion. If you're wearing a helmet sealed to the suit during re-entry — which is standard procedure — and you can't equalize, the pressure changes during descent can be excruciating and potentially injure your eardrums.

Schirra requested that he and his crew be permitted to remove their helmets before re-entry to manage this risk. Mission Control said no — the helmets are required by mission rules. Schirra, who has made it very clear that he is the commander of that spacecraft and that his judgment in the vehicle takes precedence when lives are at risk, essentially told Mission Control they were going to remove the helmets and that was that.

They removed the helmets. Everyone survived re-entry with functional eardrums.

Mission Control was apparently not pleased. This kind of public dispute between the crew and the ground is not how the program likes to operate. Schirra, Eisele, and Cunningham reportedly received a chilly reception at debriefings. The conventional wisdom is that none of the Apollo 7 crew will fly again, partly because of this and partly because Schirra had already announced retirement.

I don't know how to feel about this. Schirra made a judgment call that protected his crew, and the crew came home fine. That seems right. But mission rules exist for reasons and captains who ignore mission rules create precedents that can get people killed in other situations. The balance between individual judgment and institutional procedure is genuinely hard.

What I know is: Apollo 7 worked. The Block II command module is flight-proven. Eleven days. Three men. All objectives met.

The path to the Moon is open.
EOT
    ],

    [
        'date'     => '1968-11-12',
        'title'    => 'The Decision for Apollo 8',
        'category' => 'Apollo Program',
        'tags'     => 'apollo 8,lunar orbit,decision,borman,lovell,anders,bold plan',
        'excerpt'  => 'NASA announced it officially: Apollo 8 is going to the Moon. Not Earth orbit. Lunar orbit. Borman, Lovell, and Anders will be the first humans to leave Earth\'s gravity.',
        'content'  => <<<'EOT'
NASA announced it officially: Apollo 8 is going to the Moon.

Not Earth orbit. Not a lunar flyby. Lunar orbit. Frank Borman, Jim Lovell, and Bill Anders will be launched on December 21 on a Saturn V, travel 240,000 miles to the Moon, enter lunar orbit, and then come home.

The first human beings to leave Earth's gravitational field. The first to travel beyond the Van Allen radiation belts. The first to see the far side of the Moon. The first to see the Earth as a whole planet, from a distance.

This is audacious. The first Saturn V to carry a crew. No lunar module aboard — the LM isn't ready, so they'll fly the command and service module alone. If the service propulsion engine fails to fire for the translunar injection burn, they won't go. If the SPS fails to fire for lunar orbit insertion, they'll swing around the Moon and come home on a free-return trajectory. If the SPS fails to fire for the trans-Earth injection burn — the burn that starts them back toward Earth — they will not come home.

That last one is the nightmare scenario. A failed TEI burn means three men in lunar orbit with limited consumables, no rescue possible, no options. They would circle the Moon forever.

The crew knows this. Borman, Lovell, and Anders know the failure mode. They're going anyway.

I've been reading everything I can find about Frank Borman. He's not a showman — he's serious, almost grim in some accounts, deeply dedicated. He was on the Apollo 1 review board; he saw what the fire did and what caused it. He's the commander of the mission that will either justify the post-fire rebuilding or prove it wasn't enough.

Lovell is on his second mission — he flew Gemini 7, the two-week endurance flight with Borman. They know each other. They've spent fourteen days together in a space smaller than a car. If anyone can function as a team in a small capsule under pressure, it's these two.

Anders is a rookie, his first flight. He'll be the lunar module pilot, which is ironic because there's no lunar module. His main job will be photography — documenting the Moon from orbit to aid landing site selection.

December 21. Winter solstice. Into the darkness, toward the Moon.

I am not going to sleep well until they come home.
EOT
    ],

    [
        'date'     => '1968-12-21',
        'title'    => 'They\'re On Their Way',
        'category' => 'Apollo Program',
        'tags'     => 'apollo 8,launch,saturn v,translunar injection,borman,lovell,anders',
        'excerpt'  => 'Apollo 8 launched this morning. The Saturn V worked. The translunar injection burn worked. Frank Borman, Jim Lovell, and Bill Anders are on their way to the Moon.',
        'content'  => <<<'EOT'
Apollo 8 launched this morning at 7:51 AM, and the Saturn V worked.

All three stages. Perfect profile. The first stage separated, the second stage fired, the third stage put them in Earth orbit. Then, two and a half hours later, the J-2 engine on the third stage fired again for translunar injection — and the spacecraft departed Earth orbit at 24,200 miles per hour.

Frank Borman, Jim Lovell, and Bill Anders are on their way to the Moon.

I watched the launch from the living room. Harold was here. Edna was here. Betty had a pot of coffee on and nobody touched it for twenty minutes because we were all watching that rocket go up and none of us were willing to look away.

The Saturn V. I've written about the Saturn V — the 363 feet, the 7.5 million pounds of thrust, the five F-1 engines. Watching it on television doesn't prepare you for what it apparently is in person (the people at the press site reported the same chest-vibration experience as Apollo 4). On television it's magnificent. I want to imagine what it's like from three miles away, that light and that noise and that slow, improbable rise.

They're at what will become a standard approach: a figure-eight that takes them from Earth orbit onto a trajectory that will bring them to the Moon in about three days. They'll enter lunar orbit on December 24 — Christmas Eve.

Christmas Eve, in lunar orbit.

I keep stopping on that phrase. It seems too much. Too cinematic. Too right.

Three men from Earth, in a spacecraft the size of a station wagon, will be orbiting the Moon on Christmas Eve, 240,000 miles from home, looking down at a surface no human has ever seen that close.

I don't have better words for it than that. Whatever those men see and say and experience in the next week, it's already the most extraordinary journey in human history. They haven't arrived yet and it's already that.

Betty made the coffee warm again. Harold stayed for dinner. We talked about other things eventually — Harold's garden, Edna's sister's Christmas plans — but every few minutes one of us would say "they're on their way" and then we'd be quiet again.

They're on their way.
EOT
    ],

    [
        'date'     => '1968-12-24',
        'title'    => 'Christmas Eve at the Moon',
        'category' => 'Apollo Program',
        'tags'     => 'apollo 8,lunar orbit,christmas eve,genesis reading,earthrise',
        'excerpt'  => 'Frank Borman, Jim Lovell, and Bill Anders entered lunar orbit this morning. Tonight they read from Genesis on a Christmas Eve television broadcast from 240,000 miles away.',
        'content'  => <<<'EOT'
Frank Borman, Jim Lovell, and Bill Anders entered lunar orbit this morning. The service propulsion engine fired correctly for LOI — lunar orbit insertion — and the spacecraft slowed and was captured by lunar gravity.

They are in orbit around the Moon.

Tonight they broadcast live from lunar orbit on television — a Christmas Eve broadcast that I think will be remembered for as long as there are records. The pictures showed the lunar surface scrolling beneath them: gray, cratered, ancient. And then, as the spacecraft orbited and their angle changed, the Earth appeared above the lunar horizon. The Earth. Rising above the Moon.

I saw it on television and couldn't speak for a moment.

Then Borman, Lovell, and Anders took turns reading from the Book of Genesis.

"In the beginning God created the heaven and the earth. And the earth was without form, and void; and darkness was upon the face of the deep..."

Bill Anders read first. Then Lovell. Then Borman. They read the first ten verses of Genesis — the creation passage — from a spacecraft orbiting the Moon on Christmas Eve, while a camera showed us the ancient lunar surface below and the living Earth above.

Whatever people feel about religion, whatever they feel about the politics of the space program, whatever they feel about the year this country has had — 1968, the broken year, the year of King and Kennedy and the Tet Offensive and Chicago and everything else — I don't think anyone could listen to that broadcast without feeling something large.

Borman ended: "And from the crew of Apollo 8, we close with good night, good luck, a Merry Christmas, and God bless all of you — all of you on the good Earth."

I sat in my living room in Ohio and wept. I'll admit it plainly. Betty was next to me and I didn't try to pretend otherwise. They were so far away, and the Earth was so small in the picture, and the year had been so hard, and those three voices were coming from somewhere no human voice had ever come from before.

Good night. Good luck. Merry Christmas. God bless all of you on the good Earth.

I am one of the people on the good Earth. I received their blessing from the Moon and I accept it.
EOT
    ],

    [
        'date'     => '1968-12-27',
        'title'    => 'Apollo 8 Comes Home',
        'category' => 'Apollo Program',
        'tags'     => 'apollo 8,splashdown,trans-earth injection,recovery,success',
        'excerpt'  => 'The trans-earth injection burn fired correctly and Apollo 8 splashed down safely in the Pacific this morning. They made it.',
        'content'  => <<<'EOT'
The trans-earth injection burn fired correctly.

That's the sentence I've been waiting to write since December 21. The TEI burn — the one that starts the astronauts home from lunar orbit — the one that, if it had failed, would have left them circling the Moon forever. It fired at 1:10 AM on Christmas morning, and the astronauts were on their way home.

Apollo 8 splashed down in the Pacific this morning at 10:51 AM Eastern Time. Recovery was quick and clean. Borman, Lovell, and Anders are aboard the recovery ship, in good health, having completed ten lunar orbits and traveled roughly 580,000 miles in six days.

They went to the Moon and came back.

I've been writing this notebook since 1957 — eleven years since Sputnik. I was watching for a specific moment, and I've believed it was coming, but there were times — after the fire, during the delays, after the unmanned test failures — when the belief wavered. When the distance between where we were and where we needed to be seemed too great.

They went to the Moon and came back.

The Moon is no longer out of reach. The next flight will test the lunar module in Earth orbit. The flight after that will test it in lunar orbit. The flight after that — if everything works — will land on it. Perhaps as early as next summer.

Next summer. 1969.

The Time magazine cover this week calls it "the Year's Best News." I'd say it's the decade's best news. Maybe the century's. They flew around the Moon and read Genesis and described what they saw and came home safely.

"Earthrise" — the photograph Bill Anders took of the Earth appearing above the lunar horizon — will be in every history book. The Earth. Small, blue, alone in the dark above a gray lunar landscape. Something about seeing it from that angle — from outside, from away — makes it look simultaneously more fragile and more precious than it looks from the surface.

It's our home. It's all we have. And three people left it, circled the Moon, and came back to tell us what it looked like from there.

Thank you, Borman. Thank you, Lovell. Thank you, Anders. Thank you to every engineer and flight controller and technician who made it possible.

The Moon.

We're going.
EOT
    ],

    [
        'date'     => '1969-01-05',
        'title'    => 'What 1968 Was',
        'category' => 'Personal',
        'tags'     => '1968,reflection,year in review,apollo,tragedy,hope',
        'excerpt'  => '1968 is over and I\'m trying to figure out what kind of year it was. The worst year and the best year. The year America broke and also the year it reached the Moon.',
        'content'  => <<<'EOT'
1968 is over. I've been sitting with it for a week, trying to figure out what kind of year it was.

The honest answer is: both. The worst year and the best year. The year America seemed to break, and also the year three Americans reached the Moon.

What happened in 1968: The Tet Offensive. Lyndon Johnson announcing he would not seek re-election. Martin Luther King assassinated in Memphis. Robert Kennedy assassinated in Los Angeles. The Democratic National Convention in Chicago, where police beat protesters on national television. Richard Nixon elected president. The Soviet invasion of Czechoslovakia. 16,889 American deaths in Vietnam — the highest single-year total of the war.

And also: Apollo 7 proving the redesigned capsule worked. Apollo 8 reaching lunar orbit. Three men reading Genesis from 240,000 miles away on Christmas Eve. An astronaut photographing the Earth rising above the Moon.

How do you hold those two things together? You don't, exactly. They're both real. They're both America in 1968. The same country that produced the National Guard in Chicago produced Gene Kranz in Houston. The same year that killed King and Kennedy sent Borman and Lovell and Anders around the Moon.

I've been keeping this notebook since 1957 as a record of the space program, but 1968 is the year I couldn't pretend it was only about the space program. It's about America, and America in 1968 was a complicated place to live.

The Moon landing, if and when it comes, will not fix what's broken. It won't end the war. It won't bring King or Kennedy back. It won't make the country's racial fractures heal. Anyone who says "if we can go to the Moon, why can't we solve [problem X]" is mixing metaphors — the Moon is a technical problem with a solution that money and engineering can reach. The country's other problems are moral and political and require different kinds of will.

But it matters anyway. The Moon matters. Not as a solution to anything. As evidence that people are capable of extraordinary things when they commit to them clearly and work toward them honestly and don't give up.

I needed that evidence in 1968. I received it on Christmas Eve.

1969. The landing attempt. The hardest part.

I'm ready.
EOT
    ],

    [
        'date'     => '1969-03-03',
        'title'    => 'Spider — The Lunar Module Flies',
        'category' => 'Apollo Program',
        'tags'     => 'apollo 9,lunar module,spider,mcdivitt,scott,schweickart',
        'excerpt'  => 'The lunar module flew for the first time with humans aboard today. Jim McDivitt and Rusty Schweickart took "Spider" on a solo flight while Dave Scott flew the command module.',
        'content'  => <<<'EOT'
The lunar module flew for the first time with humans aboard today.

Apollo 9 has been in Earth orbit for five days now, and today Jim McDivitt and Rusty Schweickart took the lunar module — call sign "Spider," because the crew thought it looked like a spider, which it does — on a solo flight. They undocked from the command module (call sign "Gumdrop"), flew Spider 100 miles away, fired the descent engine, fired the ascent engine, and rendezvoused and docked again with Dave Scott in Gumdrop.

The mission I've been writing about for two years — the one that requires undocking the lander, descending, and returning — its fundamental architecture was validated today in Earth orbit.

The lunar module is a genuinely strange spacecraft. It was designed purely for space — it will never operate in an atmosphere, so it has no aerodynamic considerations. It has two engines (descent and ascent), legs for landing, two hatches, two windows, and enough life support for two people for 50 hours. It looks, as the crew noted, like a giant spider or a crumpled tin can. It is not beautiful. It is functional.

Schweickart also did a spacewalk — emerging from the lunar module's front hatch to stand on the porch, testing the suit and systems needed for lunar surface operations. He was supposed to transfer across the outside of the docked spacecraft to the command module, but he had some nausea and the EVA was shortened. The suit and systems worked; the transfer procedure can be refined.

The critical test passed: Spider flies. Two men can take the lander away from the command module, maneuver it, fire both its engines, and return to dock. Dave Scott was alone in Gumdrop during the period when Spider was undocked — exactly the situation that will occur when two astronauts land on the Moon and the third orbits waiting for their return.

This is the dress rehearsal for the dress rehearsal. The landing is two missions away.

Apollo 10 will take the lunar module to lunar orbit and descend to within 50,000 feet of the surface without actually landing. Then Apollo 11 will be the real thing — if everything keeps working.

Two missions. This summer.
EOT
    ],

];

$created = 0;
$skipped = 0;

foreach ( $posts as $p ) {
    global $wpdb;
    $exists = $wpdb->get_var( $wpdb->prepare(
        "SELECT ID FROM {$wpdb->posts} WHERE post_title = %s AND post_type = 'post' AND post_status != 'trash' LIMIT 1",
        $p['title']
    ) );

    if ( $exists ) {
        echo "SKIP (exists) [{$exists}]: {$p['title']}\n";
        $skipped++;
        continue;
    }

    $cat_id = get_category_id_6( $p['category'] );

    $post_id = wp_insert_post( [
        'post_title'    => $p['title'],
        'post_content'  => $p['content'],
        'post_excerpt'  => $p['excerpt'],
        'post_date'     => $p['date'] . ' 10:00:00',
        'post_status'   => 'publish',
        'post_type'     => 'post',
        'post_category' => [ $cat_id ],
    ], true );

    if ( is_wp_error( $post_id ) ) {
        echo "ERROR: {$p['title']} — " . $post_id->get_error_message() . "\n";
        continue;
    }

    if ( ! empty( $p['tags'] ) ) {
        wp_set_post_tags( $post_id, $p['tags'] );
    }

    echo "CREATED [{$post_id}]: {$p['title']} ({$p['date']})\n";
    $created++;
}

echo "\n=== Import 6 complete: {$created} created, {$skipped} skipped ===\n";
