<?php
/**
 * Apollo Blog Import - File 7
 * Posts: Apollo 10 dress rehearsal, Apollo 11 buildup, lunar science,
 *        mission architecture, astronaut profiles
 * Run via: ddev wp eval 'require "/var/www/html/import/import-7.php";'
 */

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname(__FILE__) . '/../' );
    require dirname(__FILE__) . '/../wp-load.php';
}

function get_category_id_7( $name ) {
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
        'date'     => '1969-04-05',
        'title'    => 'Who Will Land on the Moon?',
        'category' => 'Apollo Program',
        'tags'     => 'crew selection,armstrong,aldrin,collins,apollo 11',
        'excerpt'  => 'NASA announced the Apollo 11 crew: Neil Armstrong commanding, Buzz Aldrin on the lunar module, Mike Collins in the command module. These three will attempt the landing.',
        'content'  => <<<'EOT'
NASA announced the Apollo 11 crew today: Neil Armstrong commanding, Buzz Aldrin as lunar module pilot, and Mike Collins as command module pilot.

These are the men who will attempt the first lunar landing. If Apollo 10 goes well in May — and it needs to go well — Armstrong and Aldrin will be the first humans to walk on the Moon.

I've been watching Armstrong since Gemini 8, when he diagnosed and recovered from a spacecraft spin that could have killed him and his crewmate. He's deliberate and precise and not given to public displays of ego. He came from the research pilot world at Edwards Air Force Base, where you test aircraft at the edge of what's physically possible and you write up the results in careful technical language. He's a scientist-pilot in the tradition the program has been developing. He'll be the first man down the ladder, if everything goes right.

Aldrin I've been watching since Gemini 12, where he solved the spacewalk efficiency problem that had frustrated earlier astronauts. He has a doctorate from MIT in orbital mechanics. He understands the physics of what he's doing at a level that gives him analytical reserves most pilots don't have. He can improvise from first principles if the procedures don't cover a situation.

Collins flew Gemini 10 and did an EVA to retrieve equipment from a target vehicle — a complex, successful mission. He'll be the most isolated human being in history: orbiting the Moon alone in the command module for the hours the others are on the surface, out of radio contact on the far side on every orbit. He does not seem troubled by this in the accounts I've read of his interviews.

There are people asking why it's Armstrong and not someone else. The short answer is that the crew assignment process rotates through the training groups, and Armstrong's backup slot on Apollo 8 put him in line for Apollo 11 by the standard rotation. He also has the kind of unflappable professional record that makes him exactly the right person for a mission that will have problems we can't anticipate.

If Grissom were alive, I think it would have been him. But Armstrong is the right choice for what this mission is.

May: Apollo 10. June or July: the attempt.

I'm going to try to enjoy the dress rehearsal.
EOT
    ],

    [
        'date'     => '1969-05-18',
        'title'    => 'Snoopy Goes to the Moon',
        'category' => 'Apollo Program',
        'tags'     => 'apollo 10,snoopy,charlie brown,lunar module,cernan,young,stafford',
        'excerpt'  => 'Apollo 10 launched today with Tom Stafford, John Young, and Gene Cernan. The lunar module is named Snoopy. The command module is Charlie Brown.',
        'content'  => <<<'EOT'
Apollo 10 launched today with Tom Stafford in command, John Young on the command module, and Gene Cernan on the lunar module. They named the lunar module Snoopy. The command module is Charlie Brown. The people who do the official naming at NASA apparently decided this was appropriate.

It is, in fact, appropriate. Snoopy and Charlie Brown. The crew going all the way to the Moon to practice everything except landing, and then coming home.

The mission profile: travel to the Moon, enter lunar orbit, Stafford and Cernan take Snoopy down to 50,000 feet above the surface — 50,000 feet, which is about 9.5 miles — while Young orbits in Charlie Brown. Then return to the command module and come home.

They will fly over the Apollo 11 landing site, take photographs, verify the navigation data. Everything the landing crew needs to have checked, they will check. The only step they won't take is the actual descent to the surface. They'll get close enough to see rocks. And then they'll fire the ascent engine and go back up.

There have been some jokes about why they didn't just land while they were there. The honest answer involves propellant loading: Snoopy was not loaded with the quantity of propellant needed for a full landing descent. If Stafford and Cernan had tried to land, they would have run out of fuel before reaching the surface. The mission was designed specifically so they couldn't land even if they wanted to.

Gene Cernan, who as of yesterday has never walked on the Moon but will come closer tomorrow than anyone ever has, said in an interview that it was going to be very difficult to fly 50,000 feet over the surface and then turn around. He said he trusted the mission design and trusted that it was necessary. He said it wasn't easy.

I believe him. The hardest thing about discipline is not using a capability you have when the rules say don't. Cernan is going to be 9 miles above the Moon. He could, in principle, continue down. He won't.

That's discipline in the service of something larger than the individual moment.

Go, Snoopy. Show us the landing site.
EOT
    ],

    [
        'date'     => '1969-05-22',
        'title'    => 'Nine Miles Up — Apollo 10\'s Descent',
        'category' => 'Apollo Program',
        'tags'     => 'apollo 10,descent,snoopy,50000 feet,landing site,ascent stage',
        'excerpt'  => 'Stafford and Cernan flew Snoopy to within 47,000 feet of the lunar surface today. There was a moment of chaos with the ascent stage before they rendezvoused safely.',
        'content'  => <<<'EOT'
Stafford and Cernan flew Snoopy to within 47,000 feet of the lunar surface today. Nine miles. They could see boulders. They photographed the Sea of Tranquility landing site from close range.

And then there was a moment of chaos that nobody expected.

After the low pass, when they fired the ascent stage explosive bolts to separate from the descent stage in preparation for re-joining the command module, the ascent stage went into an unexpected tumble — pitching and rolling rapidly. The problem turned out to be a switch set to the wrong position: the ascent stage guidance system was in the wrong mode for the separation. The ascent stage briefly began to hunt for an object to maneuver toward, which at that moment happened to be the nearby descent stage instead of the orbiting command module.

The tumble lasted about eight seconds. Cernan's voice in the recording says what I'll charitably call a colorful word. They got control back, identified the problem, corrected it.

Eight seconds. In another spacecraft, without Stafford and Cernan's experience and quick hands, that could have been fatal. The ascent stage tumbling and unable to recover means no rendezvous with the command module means three dead men.

They recovered. They rendezvoused. They docked. They came home.

But I want to note the eight-second tumble because it illustrates something about spaceflight that the clean television coverage doesn't convey: it is genuinely dangerous, not just in the abstract sense where any powerful machine has theoretical failure modes, but in the specific sense that when things go wrong they go wrong fast and the margin between acceptable and catastrophic can be very small.

Apollo 10 accomplished everything it was supposed to. The landing site is verified. The navigation data is confirmed. The descent trajectory and abort procedures are tested. Snoopy went to 47,000 feet and came back.

Armstrong and Aldrin are next. The full descent. The surface. The ladder.

If the switch is in the right position.
EOT
    ],

    [
        'date'     => '1969-06-15',
        'title'    => 'The Lunar Module Descent — Step by Step',
        'category' => 'Technology',
        'tags'     => 'lunar module,descent,powered descent initiation,landing,pdi',
        'excerpt'  => 'I\'ve spent the past few weeks trying to understand the powered descent to the lunar surface in detail. Let me write out what I know.',
        'content'  => <<<'EOT'
I've spent the past few weeks trying to understand the powered descent to the lunar surface in detail, because I want to know exactly what Armstrong and Aldrin will be doing when they attempt it.

The descent from lunar orbit to the surface has several distinct phases, and the terminology matters.

Descent orbit insertion: The lunar module separates from the command module in circular orbit about 60 miles up. The descent engine fires briefly to lower the perilune (lowest point of orbit) to about 50,000 feet — this is the point from which the powered descent begins.

Powered descent initiation (PDI): The descent engine fires at 50,000 feet, beginning the braking burn. The engine is throttleable — unique among rocket engines at the time — which means the thrust can be varied from about 10% to 92% of maximum. This is necessary because the guidance computer needs to be able to adjust the trajectory precisely. A non-throttleable engine would mean less control, more approximation.

Braking phase: The first several minutes of powered descent slow the spacecraft from orbital velocity (about 5,500 feet per second) to near zero horizontal velocity. During most of this phase, the lunar module is flying face-down — the astronauts are looking away from the surface. They're monitoring instruments and trusting the guidance computer.

Approach phase: Beginning at about 7,500 feet altitude, the lunar module pitches forward so the crew can see the surface. This is when they can actually look at where they're going.

Final approach and landing: Below about 500 feet, the commander takes manual control of the horizontal position, while the computer still controls the descent rate. The commander flies the lunar module like a helicopter to avoid large boulders, craters, or slopes that the approach trajectory might be aiming at.

Touchdown: The landing legs absorb the contact. A probe on one of the legs (about 5 feet long) touches first and triggers a "contact" light. The crew shuts down the engine immediately — the engine plume could erode the surface and destabilize the lander if left running.

The whole powered descent takes about 12 minutes from PDI to touchdown. Twelve minutes, from 50,000 feet above the surface of another world to standing on it.

I've been reading about the "program alarms" that the guidance computer might generate. The computer can throw various alarm codes — 1202, 1201, etc. — that mean the executive program (the operating system) is overloaded and aborting lower-priority tasks. The guidance computer people know about this. They're hoping it doesn't happen on the first real landing.

Twelve minutes. I'll be in front of the television for every second of it.
EOT
    ],

    [
        'date'     => '1969-06-20',
        'title'    => 'What the Moon Actually Is',
        'category' => 'Science',
        'tags'     => 'lunar geology,moon formation,maria,highlands,regolith,crater',
        'excerpt'  => 'While I\'m waiting for the launch, I\'ve been reading about what the Moon actually is — geologically, scientifically. We\'re not just planting a flag; we\'re visiting an ancient world.',
        'content'  => <<<'EOT'
While I'm waiting for the launch, I've been reading about what the Moon actually is — geologically, scientifically. We're not just going to plant a flag. We're visiting an ancient world that has recorded the history of the early solar system in a way the Earth cannot, because the Moon has no plate tectonics, no erosion, no weather. Things that happened 4 billion years ago are still visible on the surface.

The Moon is roughly 4.5 billion years old — the same age as the Earth, because both formed from the same disk of material around the early Sun. The leading theory for the Moon's origin (which is not fully settled, but is increasingly accepted) is that a Mars-sized object struck the early Earth about 4.5 billion years ago, and the resulting debris coalesced into the Moon. This explains why the Moon's composition is similar to Earth's mantle, and why it's larger relative to its planet than any other moon in the solar system.

The surface has two main terrains. The highlands (light-colored in telescope images) are the ancient crust — anorthosite, a rock type formed when the early Moon had a global magma ocean. The highlands are 4 billion years old and are saturated with impact craters from the period of heavy bombardment that ended about 3.8 billion years ago.

The maria (Latin for "seas" — dark areas visible from Earth) are younger — about 3.5 to 3.8 billion years old. They formed when large asteroid impacts punched through the crust, allowing lava from the mantle to flood the impact basins. The lava cooled into basalt — a dark rock, which is why the maria are dark. The Sea of Tranquility, where Apollo 11 is landing, is a mare.

The surface everywhere is covered in regolith — pulverized rock, the product of billions of years of meteorite impacts grinding everything into dust and small fragments. On average, the regolith is 10 to 20 feet deep in the maria. This is why Surveyor's landing proved the surface was firm enough: the regolith compacts under pressure.

The lunar samples Armstrong and Aldrin bring back will be extraordinarily valuable. We can date rocks by their radioactive decay products. Lunar samples will tell us exactly when the mare lava flows happened, how the lunar crust formed, what the bombardment history was. The scientific community has been planning for these samples for years.

I keep thinking about the rocks. Armstrong and Aldrin will bend down and pick up rocks that nobody has touched in 4 billion years. Objects that formed when the Earth was young, before life existed, before the oceans existed. They'll put them in bags and bring them home and scientists will spend decades analyzing them.

That seems like a privilege beyond description.
EOT
    ],

    [
        'date'     => '1969-07-01',
        'title'    => 'The Launch Is Three Weeks Away',
        'category' => 'Personal',
        'tags'     => 'anticipation,july 16,apollo 11,launch date,countdown',
        'excerpt'  => 'The launch date has been set: July 16, 1969. That\'s three weeks from yesterday. I can barely sit still.',
        'content'  => <<<'EOT'
The launch date has been set: July 16, 1969. That's three weeks from yesterday.

I can barely sit still.

I've been keeping this notebook for twelve years. Sputnik in October 1957, when I went outside in my bathrobe and stared at an ordinary Ohio sky that suddenly felt like it belonged to someone else. Mercury. Gemini. The fire. The long wait. Apollo 7, 8, 9, 10 — each one closer, each one proving one more piece of the architecture.

July 16. Three weeks.

Betty is watching me live in a state of barely controlled excitement and is being remarkably patient about it. She asked last night if I was going to be like this for the next three weeks. I said probably yes. She said she figured that was the case and made a pot of tea.

Harold came over for dinner on Saturday and we talked about nothing but the mission for two hours while Edna and Betty talked about gardening and presumably felt some relief. Harold is not sentimental about space the way I am — he's always been the practical one — but even Harold admitted that he's going to be in front of the television on July 20 for the landing.

"If it works," he said.

"It'll work," I said.

"You always say that," he said.

"I've been right," I said.

He admitted that I had, in fact, been right more often than not about the program's milestones.

I've been tracking what I want to remember to write about. The first television images from the Moon's surface — if they get them working. The words Armstrong will say when he steps down. The moment Aldrin follows. The planting of the flag. The geological collection. The lift-off. The rendezvous. The long coast home.

And the landing, before any of that. The powered descent. The twelve minutes. The program alarms or lack thereof. The moment the contact light illuminates and the engine shuts off and two Americans are standing on another world.

Three weeks. The most anticipated three weeks of my life.

I'm going to try to sleep. I don't think it'll work.
EOT
    ],

    [
        'date'     => '1969-07-09',
        'title'    => 'Armstrong\'s Voice',
        'category' => 'Personal',
        'tags'     => 'neil armstrong,character,pilot,preparation,humility',
        'excerpt'  => 'I\'ve been reading everything I can find about Neil Armstrong, trying to understand who is about to do this thing. The more I read, the more I think the right man is going.',
        'content'  => <<<'EOT'
I've been reading everything I can find about Neil Armstrong, trying to understand who is about to do this thing. The more I read, the more convinced I am that the right man is going.

Armstrong was born in Ohio, which feels personally significant even though it shouldn't. Wapakoneta, in the western part of the state — about 140 miles from where I'm sitting. He got his student pilot license at 15, before he got his driver's license. He flew combat missions in the Korean War and nearly lost his plane to enemy fire over a cable strung across a valley at low altitude. He was a research test pilot at Edwards Air Force Base, where he flew the X-15 rocket plane to 207,000 feet — nearly 40 miles up, the edge of space. He resigned from the Navy and went to Edwards because he wanted to test aircraft, not sit on an aircraft carrier. He made his own choices, calmly, in the direction of where he wanted to go.

He went back to school after Korea, finished his engineering degree at Purdue. He applied to NASA's second astronaut group in 1962. He was technically late with his application — it arrived a week past the deadline — and was apparently accepted anyway because someone in the selection office liked his record well enough to overlook the timing. Or the deadline was a soft deadline. Either way.

He's quiet. That's the thing everyone says. Not shy — he gives interviews and press conferences and does them competently — but economical. He says what's necessary and doesn't say what isn't. He doesn't perform. When Gemini 8 went into that spin and he spent thirty seconds bringing the spacecraft back under control, he was apparently calm throughout, reporting what was happening in the same tone you'd use to describe traffic on the highway.

I think about the moment when he steps onto the Moon's surface. He will say something, because the whole world will be watching and listening and it will be the most witnessed single step in human history. What do you say in that moment? What words are adequate?

I don't know what he'll say. He's apparently been thinking about it, and has said in interviews he hasn't settled on the words yet. I believe him. Armstrong is not the type to have a prepared speech waiting; he'll say what seems right in the moment, in the specific language of the moment, and it will be his.

I hope he knows how many of us are standing behind him in spirit. Twelve years of watching. Millions of people who followed every step and got here. We're all going, in a way. He's going for us.

Six days to launch.
EOT
    ],

    [
        'date'     => '1969-07-13',
        'title'    => 'Watching the Rollout',
        'category' => 'Personal',
        'tags'     => 'launch pad,saturn v,rollout,kennedy space center,countdown',
        'excerpt'  => 'The Saturn V rolled out to Pad 39A last month and photographs show it standing there under the Florida sun, waiting. Three days until they light it.',
        'content'  => <<<'EOT'
The Saturn V has been standing on Pad 39A at Kennedy Space Center for weeks now, and I keep looking at the photographs.

It's enormous. Standing there in the Florida sun, this white tower with the black stripes of the United States flag painted on it, the letters "USA" visible from the press site three miles away. The Vehicle Assembly Building is behind it — the building that was constructed specifically to assemble the Saturn V because nothing else in Florida was large enough. The VAB is one of the largest buildings by enclosed volume on Earth.

The photographs show the Saturn V from various angles. From a distance, the scale is wrong; it looks like a model. Up close, when you can see people at the base for scale, it becomes real. 363 feet. Six million pounds of hardware and propellant.

In three days they will light the five F-1 engines at the bottom and the whole thing will rise, and it won't stop rising until Borman — no, Armstrong. Armstrong. Until Armstrong, Aldrin, and Collins are on their way to the Moon.

I've been reading the Associated Press dispatches from Cape Canaveral. The countdown is proceeding nominally — that's the word they use, "nominally," meaning according to plan. The weather forecasts look acceptable. There is expected to be a half-million people traveling to the area to watch the launch. People sleeping on beaches, in cars, in campgrounds. A crowd the size of a small city, gathered to watch a fire lift three people into the sky.

I wish I were one of them. I can't afford the trip, and I'd have to find someone to watch the house, and it didn't come together in time. But I keep thinking about being three miles from that pad when the F-1 engines ignite.

I'm going to watch on television instead. In the living room in Ohio, with Betty and Harold and Edna and whatever else gets pulled along by the gravity of this event. It won't be the same as being there. But it won't be nothing.

Three days.
EOT
    ],

    [
        'date'     => '1969-07-16',
        'title'    => 'It\'s Up — Apollo 11 Launch Day',
        'category' => 'Apollo 11',
        'tags'     => 'apollo 11,launch,saturn v,armstrong,aldrin,collins,july 16',
        'excerpt'  => 'The Saturn V launched at 9:32 AM this morning and everything worked. Armstrong, Aldrin, and Collins are on their way to the Moon.',
        'content'  => <<<'EOT'
The Saturn V launched at 9:32 AM this morning and everything worked.

The five F-1 engines ignited at T minus 8 seconds, building thrust while hold-down clamps kept the rocket in place. At T zero the clamps released. The rocket rose — slowly at first, because slow is what 7.5 million pounds of thrust looks like when it's pushing 6 million pounds of rocket — and then faster, and then it was gone.

One minute and twelve seconds after launch, the Saturn V passed the speed of sound. First stage separation at two and a half minutes. Second stage ignition. Third stage. Earth orbit. Translunar injection.

Neil Armstrong, Buzz Aldrin, and Mike Collins are on their way to the Moon.

I watched from the living room. Harold and Edna came over at 8:00 and we drank coffee and waited. Betty made pancakes that nobody ate. The launch coverage began and we sat in front of the television and didn't move.

When the rocket cleared the tower and began to rise, I heard Harold say, quietly, "There it goes." Just that. There it goes.

There it goes.

The crowds at Cape Canaveral — half a million people, as projected — reportedly made a sound when the rocket launched that the correspondents struggled to describe. Not a cheer exactly. A roar of voices and then a gasp and then sound again but more intense. The television correspondent said, "You can feel the ground shake from here" and his voice was not steady.

I sat in Ohio and I felt something shake that wasn't the ground.

I've been waiting for this since 1957. Not for this specific mission — I didn't know what the specific mission would be twelve years ago. I was waiting for the meaning of it. The moment when the country I live in, and the species I belong to, did the thing that Sputnik made imaginable and Kennedy made a commitment and ten thousand engineers and scientists and astronauts made possible.

We are going to the Moon.

We are on our way.

Four days to landing.
EOT
    ],

    [
        'date'     => '1969-07-19',
        'title'    => 'Lunar Orbit Insertion — They Made It',
        'category' => 'Apollo 11',
        'tags'     => 'apollo 11,lunar orbit insertion,LOI,moon orbit,collins',
        'excerpt'  => 'Apollo 11 entered lunar orbit this afternoon. The service propulsion engine fired for 6 minutes behind the Moon, and when the spacecraft came back in radio contact, they were in orbit.',
        'content'  => <<<'EOT'
Apollo 11 entered lunar orbit this afternoon.

The service propulsion engine fired for six minutes and two seconds on the far side of the Moon — the side we can't see, out of radio contact. For those six minutes, nobody on Earth knew what was happening. The spacecraft either slowed into lunar orbit or flew past the Moon and began a free-return trajectory home.

When radio contact was reestablished, Aldrin's voice came through: they were in orbit. The burn had been "like perfect" — that was the phrasing from Mission Control's reporting. Like perfect.

They're in orbit around the Moon right now. Mike Collins in the command module. Armstrong and Aldrin going over the checklists for the lunar module. Tomorrow is the day.

I've been thinking about what it's like for Collins to be where he is. He's in lunar orbit — nobody but his two crewmates has ever been in lunar orbit, and they're down in the lunar module right now while he flies alone. He'll be the most isolated person in the history of the human race when he's on the far side: out of contact with Earth, his crewmates on the surface, no radio in any direction. He said in an interview that he doesn't feel lonely, that he has a good book and he trusts that they'll come back. He said he felt the other twenty-four crewmates on all the previous missions with him.

That's a generous spirit. A generous way to frame it.

Armstrong and Aldrin undock tomorrow morning. The powered descent begins about an hour after undocking. Then twelve minutes. Then touchdown or abort.

I've read that Armstrong's heart rate during the Gemini 8 spin reached about 150 beats per minute. During the powered descent tomorrow it will probably be higher. Mine might be that high just watching.

I am not going to sleep well tonight. That seems appropriate.

Tomorrow, if everything works, two human beings will stand on the Moon.
EOT
    ],

    [
        'date'     => '1969-07-20',
        'title'    => 'Program Alarm 1202',
        'category' => 'Apollo 11',
        'tags'     => 'apollo 11,1202 alarm,jack garman,guidance computer,powered descent',
        'excerpt'  => 'Partway through the powered descent, a guidance computer alarm called 1202 appeared. The whole world held its breath. A 24-year-old named Jack Garman said "go."',
        'content'  => <<<'EOT'
Partway through the powered descent to the lunar surface, a guidance computer alarm appeared on the display. The alarm code was 1202.

Nobody outside of Mission Control's technical staff knew what 1202 meant. The television commentary went quiet for a moment. Armstrong asked Mission Control what it was. And then Mission Control's Steve Bales — working with a young man named Jack Garman, who had memorized all the alarm codes — said "Go. We're go on that alarm."

The landing continued.

The 1202 alarm means the guidance computer's executive program is overloaded and is dropping lower-priority tasks to keep the highest-priority calculations running. The computer is saying, in effect: I have more work than I can do, so I'm choosing which work to do. The computer can keep flying the spacecraft in this state; it's shedding tasks that aren't needed for guidance, like certain display updates. The guidance itself continues correctly.

Jack Garman was 24 years old. He had written the procedure for this alarm and had been drilled on it. When Bales turned and asked him, Garman said "go" and the landing continued.

If Garman had said abort, the mission would have ended. Armstrong and Aldrin would have fired the ascent engine and left the surface — never having touched it. And the reason would have been a guidance computer alarm that wasn't actually catastrophic.

The alarm happened three times during the descent. Three times, Mission Control said "go." Three times, the landing continued.

This is what I mean when I say Mission Control is the other half of every spaceflight. The crew does their job. But the crew can't evaluate their own guidance computer alarms while they're in the middle of the most complex twelve minutes in spaceflight history. Jack Garman sat at his console and kept the mission alive.

I didn't know any of this in real time. I knew there was a problem and then I knew they kept going and then I watched the rest of the descent. Only afterward, reading the debriefings, did I understand what 1202 meant and who made the call.

Twenty-four years old.
EOT
    ],

    [
        'date'     => '1969-07-20',
        'title'    => 'Tranquility Base Here — The Eagle Has Landed',
        'category' => 'Apollo 11',
        'tags'     => 'apollo 11,landing,sea of tranquility,tranquility base,eagle has landed',
        'excerpt'  => 'At 4:17 PM Eastern Time, Eagle landed on the Sea of Tranquility. Armstrong\'s voice: "Tranquility Base here — the Eagle has landed."',
        'content'  => <<<'EOT'
At 4:17 PM Eastern Time on July 20, 1969, the Eagle landed on the Sea of Tranquility.

Armstrong's voice, calm and quiet: "Houston, Tranquility Base here. The Eagle has landed."

I was sitting in my living room. Betty was next to me. Harold was in the armchair. Edna was on the couch. Nobody in the room was breathing correctly.

When Charlie Duke's voice at Mission Control said, "Roger, Tranquility. We copy you on the ground. You've got a bunch of guys about to turn blue. We're breathing again. Thanks a lot," I heard Betty cry softly beside me and I didn't try to pretend my eyes were dry.

Two men are on the Moon.

I need to sit with that for a moment before I write any more.

Two men are on the Moon. Neil Armstrong and Buzz Aldrin are standing in the Eagle lunar module on the surface of the Sea of Tranquility, on the Moon, 238,900 miles from the chair I'm sitting in. They flew there. They descended through twelve minutes of powered flight, with three guidance computer alarms and Armstrong manually flying the last hundred feet to avoid a boulder-filled crater. The contact light illuminated and Armstrong shut down the engine and the Eagle settled onto four landing legs in a shallow depression in the regolith.

Settled. Just like that. Like it always lands. Like it was the most ordinary thing in the world to fly to the Moon.

The fuel situation during the descent was tight. They had about 20 seconds of fuel remaining when they touched down. Twenty seconds. If they'd aborted that late, the abort might not have worked cleanly. The margin was razor-thin and Armstrong knew it and flew it anyway.

He is 38 years old and he just landed on the Moon with 20 seconds of fuel to spare.

I keep starting sentences and not finishing them because there are too many things to say and none of them are adequate. I've been following this program since 1957. Since the beep. Since Laika. Since Gagarin. Since Kennedy. Since the fire. Twelve years.

They're on the Moon.

It worked.
EOT
    ],

    [
        'date'     => '1969-07-21',
        'title'    => 'One Small Step',
        'category' => 'Apollo 11',
        'tags'     => 'armstrong,moon walk,eva,first steps,one small step,giant leap',
        'excerpt'  => 'Neil Armstrong stepped onto the Moon\'s surface at 10:56 PM Eastern Time. His words came through a grainy television signal, 240,000 miles away.',
        'content'  => <<<'EOT'
Neil Armstrong stepped onto the Moon's surface at 10:56 PM Eastern Time on July 20, 1969.

He said: "That's one small step for man, one giant leap for mankind."

He said it over a crackling radio signal that traveled 240,000 miles and came through the speakers of televisions all over the world, including mine, in Ohio, at 10:56 at night with Betty beside me and Harold and Edna still here because none of us had been willing to leave.

There's been debate since whether he meant to say "one small step for a man" — with the article that would make the contrast with "mankind" precise. He's said in interviews that he meant to say "a man" and the transmission dropped the "a." The signal was noisy; it's possible. Either way, the meaning is clear and the words are already in the history books.

He stood on the surface and described it. "The surface is fine and powdery," he said. "I can pick it up loosely with my toe. It does adhere in fine layers, like powdered charcoal, to the sole and sides of my boot. I only go in a small fraction of an inch, maybe an eighth of an inch, but I can see the footprints of my boots and the treads in the fine, sandy particles."

Powdered charcoal. An eighth of an inch. The Moon has been described in poetry and mythology for ten thousand years of human history, and the first human to touch it described the texture under his boot in the language of an engineer's field report. That seems right. That seems exactly right.

Buzz Aldrin followed down the ladder about twenty minutes later. He stood on the surface and looked around and said: "Beautiful view. Magnificent desolation."

Magnificent desolation. That phrase landed in my chest.

The Moon is not a place anyone would choose to be. It's airless and cold and bare and the sky is black even at noon. Nothing lives there. Nothing ever lived there. Billions of years of craters and lava flows and no life, no movement except geological. But it's a place now — a place that has footprints in it. Human footprints. Footprints that will still be there in a million years because there's no wind, no water, no erosion.

In a million years, those footprints.

Magnificent desolation. Yes.
EOT
    ],

    [
        'date'     => '1969-07-24',
        'title'    => 'They\'re Home',
        'category' => 'Apollo 11',
        'tags'     => 'apollo 11,splashdown,recovery,pacific ocean,hornet,mobile quarantine',
        'excerpt'  => 'Apollo 11 splashed down in the Pacific Ocean this morning and Armstrong, Aldrin, and Collins are safe aboard the USS Hornet. Eight days, three hours, eighteen minutes.',
        'content'  => <<<'EOT'
Apollo 11 splashed down in the Pacific Ocean this morning at 12:50 PM Eastern Time. Neil Armstrong, Buzz Aldrin, and Mike Collins are safe aboard the recovery ship USS Hornet. Eight days, three hours, eighteen minutes.

They are in a mobile quarantine facility — a trailer-like unit on the ship's deck — because nobody knows for certain whether the Moon might harbor any form of life, and if it does, bringing it to Earth would be a catastrophic mistake. The quarantine is a precaution, probably unnecessary (the Moon shows no signs of biology), but necessary to take.

Armstrong and Aldrin look thin through the quarantine window. Their faces look like they've been through something enormous and are beginning to process what it was. Collins looks better — he didn't do the EVA, didn't work for hours on the surface in the suit, spent his time in the command module and apparently slept reasonably well.

Nixon came aboard the ship to speak with them through the quarantine window. He called it "the greatest week in the history of the world since Creation." That's a large claim; I'll let history sort it out.

Here's what I know. Eight days ago, three men left Earth on a rocket I've been following since before it existed. They flew 240,000 miles to the Moon, orbited it, landed on it, walked on it for two and a half hours, collected 47 pounds of rocks, returned to lunar orbit, docked, and came home. Everything they were asked to do, they did. They are alive.

Kennedy said before this decade is out. 1969. July 20, 1969. He was right that we would do it. He didn't live to see it.

I've been sitting at this notebook for a long time today. Not sure what to write. The thing I've been waiting for happened. The race is won. The Moon has footprints in it.

What comes next, I don't know exactly. More Apollo missions. A Space Station someday. Mars, maybe, if I live long enough.

But the thing Kennedy said we'd do, we did. The thing I've been watching for twelve years, since the beep in October 1957, is done.

We went to the Moon. We came back.

That's enough for today.
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

    $cat_id = get_category_id_7( $p['category'] );

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

echo "\n=== Import 7 complete: {$created} created, {$skipped} skipped ===\n";
