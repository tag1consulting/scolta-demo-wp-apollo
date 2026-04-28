<?php
/**
 * Apollo Blog Import - File 4
 * Posts 52-76: Early Space Race (Sputnik → John Glenn), 1957-1962
 * Run via: ddev wp eval 'require "/var/www/html/import/import-4.php";'
 */

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname(__FILE__) . '/../' );
    require dirname(__FILE__) . '/../wp-load.php';
}

function get_category_id_4( $name ) {
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
        'date'     => '1957-10-05',
        'title'    => 'The Beep That Changed Everything',
        'category' => 'Space Race',
        'tags'     => 'sputnik,soviet,space race,cold war',
        'excerpt'  => 'Last night I stayed up past midnight listening to a radio broadcast I still can\'t quite believe was real.',
        'content'  => <<<'EOT'
Last night I stayed up past midnight listening to a radio broadcast I still can't quite believe was real.

My name isn't important. I'm nobody in particular — a thirty-two-year-old insurance adjuster from outside Columbus, Ohio, with a wife named Betty, a used Studebaker in the driveway, and a vegetable garden that's been taking too long to put to bed this fall. I mention all this because I want to be clear: I am not a scientist. I am not a soldier. I have no clearance and no special knowledge. I'm just a man who couldn't sleep on October 4th, 1957, because something unprecedented happened in the sky above my head.

The Soviets launched a satellite. Sputnik, they're calling it. Little traveler.

I heard it on the radio — Walter Cronkite, calm as ever, explaining that a metal sphere the size of a beach ball was now orbiting the Earth at roughly 18,000 miles per hour, passing over the United States every 96 minutes. Every 96 minutes. While I was eating dinner. While Betty was washing dishes. While our neighbor Harold was mowing his lawn for what he swore was the last time this season.

A Soviet device was circling overhead.

I went outside in my bathrobe at 11 PM and stood in the backyard staring up at the sky, which of course told me nothing. The thing is too small to see with the naked eye. But knowing it was up there — somewhere up there — made the ordinary Ohio sky feel different. Smaller and larger at the same time. I found myself wondering how it looked from up there. What kind of signal was it sending? The radio said it was transmitting a simple beep on two frequencies — nothing in the signal, just proof that it existed and was working.

Beep. Beep. Beep.

I read every newspaper I could get my hands on today. The Times, the Dispatch, a copy of the Cleveland Plain Dealer I borrowed from Harold. The tone ranges from careful technical description to barely concealed panic. Senator Lyndon Johnson is quoted saying this could be "the worst defeat the United States has suffered since Pearl Harbor." The editorial page of the Dispatch is calmer, noting that Sputnik has no military payload and poses no direct threat. Just a beach ball. Just a beep.

But here's what I can't stop thinking about: they did it first. We've been told for twelve years that American science and American industry and American know-how were the envy of the world. We rebuilt Europe. We split the atom. We make the best cars, the most steel, the tallest buildings. And the Soviets — the Soviets who we sanctimoniously described as backward communists running on peasant farming and political terror — put a machine into orbit before we could.

How did that happen?

I know this is the beginning of something. I don't know what exactly. But I know last night changed things, the way certain dates change things: they're a dividing line you only recognize clearly in hindsight, but that you can feel happening even in the moment. Before Sputnik. After Sputnik.

I'm going to start keeping a record. Whatever comes next, I want to have written down what it felt like to be an ordinary American watching it happen, from a backyard in Ohio, in my bathrobe, looking up at a sky that suddenly felt like it belonged to someone else.

Beep.
EOT
    ],

    [
        'date'     => '1957-11-04',
        'title'    => 'Laika',
        'category' => 'Space Race',
        'tags'     => 'sputnik 2,laika,soviet,dog in space',
        'excerpt'  => 'They sent a dog. A living dog, orbiting the Earth right now. And everyone knows she\'s not coming back.',
        'content'  => <<<'EOT'
They sent a dog.

Sputnik 2 launched yesterday, and inside it is a dog named Laika — which apparently means "barker" in Russian. A small mixed-breed stray they found on the streets of Moscow. She's orbiting the Earth right now. A living creature, above the atmosphere, circling the planet at 18,000 miles per hour.

And everyone knows she's not coming back.

Betty cried when she heard the radio report. I didn't cry, but I sat with the newspaper for a long time without reading it. There's something about a dog that makes this all more real than Sputnik 1 did. The first satellite was steel and transistors. This is a heartbeat. They put a heartbeat in orbit.

I've seen some commentary that frames this as Soviet propaganda — showing that a living creature can survive the conditions of space, to prepare for putting a man up there. And that's probably right. The cold analysis is that Laika is a proof of concept, a biological test subject, and the Soviets have already announced she won't survive the mission because they haven't solved re-entry yet. Her capsule will burn up in a few months when its orbit decays. She'll be up there — alive right now, already dead in a few hours — and then she'll come down in fire.

I believe the propaganda framing is correct. I also believe it doesn't make it any better.

Harold came over for coffee this morning and we talked about it for an hour. Harold is a Korean War veteran, a practical man who has trouble with sentimentality, and even he was bothered. "It's one thing to send a machine up there," he said. "Machine doesn't know what's happening to it. Dog knows something's wrong." He drank his coffee and shook his head.

What are we supposed to do with this? The technical achievement is real — a live animal in orbit is a massive step beyond a radio transmitter. The Soviets are moving fast. And I find myself in the uncomfortable position of being both impressed and horrified and alarmed, all at once. Impressed because it's genuinely extraordinary science. Horrified because of what they did to that dog. Alarmed because while we're arguing about budgets and congressional committees, the Soviet space program is putting living things in orbit.

I keep thinking about what this means for the men who will go up there someday. Assuming anyone survives it. Assuming any government — ours or theirs — can develop a way to actually return a human being from orbit.

The military applications are the part that frightens the congressmen, I know. A rocket that can put a satellite in orbit can put a nuclear warhead anywhere on Earth. That's the real competition here. But I find myself less concerned with the military angle and more preoccupied with the thing itself — the sheer audacity of what they're attempting. What it would mean to go up there. To look down.

Poor Laika. She had no idea what she was part of. Just a stray dog who got picked up off the streets of Moscow and ended up in history.

I hope it was quick. The reports say she died within hours, probably from overheating. Not the worst death, I suppose. Better than burning up.

I'm going to put this notebook away for tonight and go sit with Betty and try not to think about a dog circling alone up above the clouds.
EOT
    ],

    [
        'date'     => '1958-02-01',
        'title'    => 'Explorer 1 — We\'re In',
        'category' => 'Space Race',
        'tags'     => 'explorer 1,united states,satellite,van allen belt',
        'excerpt'  => 'Last night the United States finally joined the space age. After Vanguard blew up on the pad in December, I had genuinely started to worry.',
        'content'  => <<<'EOT'
Last night the United States finally joined the space age.

Explorer 1 launched from Cape Canaveral at 10:48 PM Eastern Time, and by the time I woke up this morning the news was confirmed: it reached orbit. After watching the Vanguard rocket explode on its launch pad on national television in December — "Flopnik," the papers called it, which is funny and humiliating in equal measure — we finally have a satellite circling the Earth.

I don't mind admitting I had started to worry.

Not just about the prestige angle, though that's real enough. The Soviets have put up two Sputniks in four months. We have tried and failed publicly and messily. The Army, the Navy, and various contractors have been squabbling over who gets to attempt what. The whole thing has looked embarrassingly disorganized compared to the apparent efficiency of the Soviet program. Whether that appearance reflects reality, I don't know — we certainly aren't getting detailed reports from Moscow about all the Soviet rockets that blew up on their pads.

But Explorer 1 is up there now. Wernher von Braun's team did it — the German rocket engineers we brought over after the war, working out of Huntsville, Alabama. The man who built the V-2 rockets that fell on London is now building the rockets that are going to win the space race for America. History is strange.

There's already scientific news from Explorer 1 that I didn't expect. Dr. James Van Allen at the University of Iowa built the instruments aboard, and they're detecting something unexpected at high altitudes — a region of intense radiation surrounding the Earth. They're calling it the Van Allen Belt, provisionally. Something we didn't know was there. Explorer 1 went looking for a propaganda victory and found a discovery. That seems like a good omen.

Betty made a small celebration — apple pie, which she had been saving for a special occasion. Harold came over and we listened to the news broadcasts together. There's a photograph in the paper of von Braun and some Army officials holding Explorer 1 over their heads, grinning. It's a small thing — 80 inches long, 6.4 inches diameter, 31 pounds — but it's ours and it's up there.

We have a satellite. We are in the game.

I'm not naive enough to think this erases the Sputnik embarrassment or closes the gap overnight. The Soviets have a head start and they are clearly serious about this. But this feels different from the past few months of watching from the sidelines. We're in it now.

I've been reading about NASA — the National Aeronautics and Space Administration, which Congress is apparently going to establish this summer. Right now the space effort is split between the Army, Navy, and various civilian groups. NASA is supposed to consolidate it. I think that's the right instinct. You can't run a race with six people tripping over each other. Pick a lane and run.

Explorer 1. Small, humble, 31 pounds, but it belongs to us. I'll take it.
EOT
    ],

    [
        'date'     => '1958-10-07',
        'title'    => 'NASA Is Open for Business',
        'category' => 'Space Race',
        'tags'     => 'nasa,mercury program,eisenhower,space agency',
        'excerpt'  => 'As of yesterday, the United States has a proper civilian space agency. NASA opened its doors, and with it, Project Mercury was announced.',
        'content'  => <<<'EOT'
As of yesterday, the United States has a proper civilian space agency.

NASA — the National Aeronautics and Space Administration — officially opened on October 1st, and I've been thinking about what that means ever since. They've announced something called Project Mercury, which is the plan to put an American in space. One man, in a small capsule, launched on top of a rocket. The goal is to beat the Soviets to it, but also to figure out whether a human being can function in space — can breathe, think, operate controls, survive weightlessness.

That last part is the one that interests me. We don't actually know yet whether a person can function in zero gravity. The physiology is unknown. Some doctors think the human body will simply malfunction without gravity — that the heart won't pump blood correctly, that the lungs won't work, that the inner ear will go haywire and cause incapacitating disorientation. The dog data helps — Laika seemed to function for some hours before the temperature became fatal — but we don't have detailed biological telemetry from that flight, and dogs are not men.

I've been reading everything I can find about the Mercury program. The capsule will be tiny — barely big enough for one person to sit in. It won't have windows initially, I think. The astronaut will be more passenger than pilot for the early flights. They're going to recruit seven men, the papers say. They want military test pilots — men who are already accustomed to flying experimental aircraft under dangerous conditions, who understand that some percentage of their colleagues don't come back from work. Men who can stay calm while things are going wrong around them.

I'm 33 years old and I've never been a soldier or a pilot. I work insurance claims. I'm not going to be an astronaut, and I've never had any illusion otherwise. But I find myself following this whole enterprise with a personal intensity I can't entirely explain. It's not just national pride, though that's part of it. It's something else — a sense that this is the most important thing happening in the world right now, and I want to understand it as well as I can from where I sit.

Betty asked me last night if I thought they were really going to be able to put a man in space safely. Honest answer: I don't know. The rockets we have right now blow up fairly regularly. The Atlas rocket they're planning to use for Mercury has had failures. The Mercury capsule heat shield is still being developed. There are a thousand things that have to work right in sequence, and so far our record is not spotless.

But the Soviets are doing it too, and if they manage to put a man up there first, that will be the most significant propaganda victory of the Cold War. Bigger than Sputnik. Bigger than Laika. A Soviet cosmonaut in orbit while American astronauts are still on the launch pad.

I'm keeping this notebook. I want to have a record of what all this felt like from the ground level — not from Mission Control, not from the Pentagon, but from a suburban house in Ohio where a man with no special training is paying attention as hard as he can.

Project Mercury. We're going to try to put a man in space. I believe we can do it. I'm not certain we'll do it first. But I'll be watching every step of the way.
EOT
    ],

    [
        'date'     => '1959-04-10',
        'title'    => 'The Seven',
        'category' => 'Space Race',
        'tags'     => 'mercury seven,astronauts,grissom,glenn,shepard,cooper,schirra,carpenter,slayton',
        'excerpt'  => 'NASA introduced the Mercury astronauts yesterday and I had to read the names three times before I believed it.',
        'content'  => <<<'EOT'
NASA introduced the Mercury astronauts yesterday and I had to read the names three times before I believed it.

Seven men. Seven actual human beings who have volunteered to sit on top of a rocket and go into space. I keep looking at the photograph on the front page of the paper — seven men in suits, grinning, holding up little models of the Mercury capsule. They look so... ordinary. Not ordinary exactly — they're all military test pilots with exceptional records — but they look like men you might know. Men who shop at the grocery store and mow their lawns and watch the Indians on television.

Their names: Lieutenant Colonel John Glenn, Jr. — Marine. Lieutenant Commander Alan Shepard — Navy. Captain Virgil "Gus" Grissom — Air Force. Lieutenant Commander Walter Schirra — Navy. Lieutenant Commander Malcolm Scott Carpenter — Navy. Captain L. Gordon Cooper — Air Force. Captain Donald "Deke" Slayton — Air Force.

I've been reading about their backgrounds. Shepard flew off aircraft carriers. Glenn set the transcontinental speed record in 1957 — coast to coast in three hours and twenty-three minutes, faster than any human had traveled overland. Grissom flew 100 combat missions in Korea. These are not ordinary men, for all that they look ordinary in photographs. They fly things that regularly kill people, and they keep showing up for work.

One of them is going to be first. First American in space — maybe first human in space, if we get there before the Soviets. I wonder if they know yet which one it will be. I wonder what it's like to be sitting in that press conference, smiling for the cameras, knowing you've put your name in for something that might kill you.

Harold saw the press conference on television and his reaction surprised me. Harold is not a sentimental man. He fought in Korea and came back quieter than he left, and he doesn't often show enthusiasm for things. But he called me last night and said, "Andrews, those are good men. You can tell." He meant it as the highest compliment. Coming from Harold, it is.

Betty has already developed strong opinions about which of them she likes best. She likes Glenn because he looks trustworthy, she says. She also likes Carpenter because he has "kind eyes." I told her we're probably not going to the same barbecue as any of them, so her opinions on their eyes seem premature. She told me to mind my own business and passed me the sports section.

Seven men. One of them is going to ride a rocket. Some of them might not come back.

I'm going to learn as much as I can about each of them. I want to know these men — not personally, of course, but as well as a person can know someone from newspaper reports and magazine profiles. Because whoever goes up first, whatever happens, these are the men who are going to write the first chapter of this story. And I want to know who wrote it.

Godspeed, gentlemen.
EOT
    ],

    [
        'date'     => '1960-05-01',
        'title'    => 'The U-2 Affair',
        'category' => 'Space Race',
        'tags'     => 'u-2,powers,cold war,eisenhower,khrushchev',
        'excerpt'  => 'Francis Gary Powers was shot down over the Soviet Union yesterday in a U-2 spy plane. I don\'t know why I\'m writing about this in a space notebook, but it feels connected.',
        'content'  => <<<'EOT'
Francis Gary Powers was shot down over the Soviet Union yesterday in a U-2 spy plane. I don't know why I'm writing about this in a space notebook, but it feels connected.

The U-2 flies at 70,000 feet — nearly 14 miles up. The Air Force has been telling us for years that it's a weather research aircraft. Everyone with sense suspected this was a cover story; a "weather plane" with that kind of altitude capability and range doesn't need to fly over Soviet territory. Now it's confirmed: we were spying on the Soviets from altitudes we thought were beyond the reach of their missiles.

We were wrong about the missiles.

Powers was photographing military installations, apparently. Sverdlovsk, deep inside Russia. His plane was hit by a Soviet SA-2 missile at altitude, and he managed to bail out. He's alive and in Soviet custody, which is the worst possible outcome from an intelligence standpoint — alive means he can talk, and the Soviets are going to make the maximum propaganda use of this.

Khrushchev is furious. The Paris summit that was supposed to ease Cold War tensions is now in shambles. Eisenhower had to admit we were lying — not just about this flight but about a whole program of espionage flights that have been running for four years.

Here's what connects this to the space notebook: the reason we need reconnaissance aircraft flying at 70,000 feet is that we cannot yet do what we actually want to do, which is reconnaissance from orbit. A satellite passing over the Soviet Union can't be shot down. It records everything below it. And unlike a pilot, it doesn't have information the Soviets can extract.

The whole space program has this military subtext running under the science and the exploration. The rockets we're developing for Mercury are the same rockets — in modified form — that would carry nuclear warheads. The satellites we're launching for science are cousin to the spy satellites already in development. And the human spaceflight program is partly about proving we have the rocket technology to put things anywhere we want.

I don't like thinking of Alan Shepard's capsule as a cousin to an ICBM. But it's the same physics.

Powers is a prisoner in Moscow right now. He'll probably be traded for someone eventually — that's how these things work. Meanwhile Khrushchev is beating his chest at the UN, and the Paris summit is dead, and the Cold War, which had been running a few degrees warmer lately, has snapped back to its default temperature of barely-controlled mutual hostility.

We're in a race with these people. Not just for the prestige of being first to space. For actual survival. For whether the American way of life survives the next fifty years. The rockets are not metaphors.

I need to remember that, when I get excited about the science and the adventure of it all. The context is that two great powers are pointing nuclear weapons at each other and the space program is a way of proving — to the Soviets and to ourselves and to every neutral country watching — that our system works better than theirs.

The stakes are very high and a man named Francis Gary Powers is sitting in a Soviet prison to prove it.
EOT
    ],

    [
        'date'     => '1961-01-31',
        'title'    => 'Ham the Chimp Goes to Space',
        'category' => 'Mercury Program',
        'tags'     => 'ham,chimpanzee,mercury,mercury-redstone,animal in space',
        'excerpt'  => 'They sent a chimpanzee today. His name is Ham, and he went to space and came back, and the whole thing worked.',
        'content'  => <<<'EOT'
They sent a chimpanzee today. His name is Ham, and he went to space and came back, and the whole thing worked.

I'm not being dismissive — this is genuinely important. Ham flew a Mercury capsule on a Redstone rocket to an altitude of about 157 miles, experienced several minutes of weightlessness, performed the tasks he was trained to do (pushing levers in response to light signals), and splashed down in the Atlantic. He was in the capsule for about 16 minutes of total flight time, about 6.5 of that in actual space. He came back alive and apparently in reasonable health, though there was some trouble with a pressure suit overinflation that gave him a bruised nose.

The fact that he performed his tasks correctly during the flight is important. One of the unknowns about human spaceflight has been whether the cognitive and motor functions we rely on actually work in weightlessness. Ham's performance suggests they do. A chimpanzee operating a lever-response task correctly under zero-g conditions doesn't prove a human pilot can fly a spacecraft, but it's a meaningful data point.

Ham was apparently in good spirits after recovery, which is wonderful. The photographs of him grinning in his little couch after splashdown are irresistible. He reportedly bit one of the recovery personnel, which I think is entirely understandable given what he'd just been through.

Betty wanted to know if they'd give him a medal, which I said was unlikely but not impossible given how the military works. She has strong feelings about the chimpanzees and other animals used in testing. I told her the data they're getting from Ham will help make sure Alan Shepard comes back alive, and she accepted that, though she reserved the right to continue feeling bad about it.

The engineers at NASA are reviewing the flight data now. There was a concern about the cutoff for the rocket being slightly off — it went a bit faster and higher than planned, which meant Ham experienced higher G forces on re-entry than intended. The capsule also came down somewhat off target. These are things to fix before you put a man in there.

But the fundamental question — can a living thing go into space in a Mercury capsule and come back functional? — has now been answered. Yes. Ham did it.

We should be next. The Soviets are clearly working toward their own human spaceflight. I keep reading rumors and speculation about what they're preparing. The next few months feel urgent.

Ham is currently at a Washington zoo, apparently healthy and enjoying whatever chimpanzees enjoy. He will be a historical figure for as long as there are records, which is a strange fate for a chimp who just wanted the levers to behave correctly.

Good work, Ham.
EOT
    ],

    [
        'date'     => '1961-04-12',
        'title'    => 'Gagarin',
        'category' => 'Space Race',
        'tags'     => 'gagarin,soviet,first human in space,vostok,cold war',
        'excerpt'  => 'They beat us. A Soviet man orbited the Earth today and I don\'t know how to feel about it except wrong-footed and shaken and strangely moved.',
        'content'  => <<<'EOT'
They beat us.

I heard it on the radio at work — Betty called me at the office, which she never does, because she knew I'd want to know immediately. A Soviet cosmonaut named Yuri Gagarin completed a full orbit of the Earth this morning and landed safely in the Soviet Union. One orbit, approximately 108 minutes, altitude of about 188 miles. Vostok 1.

First human in space. A Soviet.

I sat at my desk for a few minutes and didn't do anything. My colleague Petersen came by and said "Heard the news?" and I said yes. He shook his head and went back to his office. That was the whole conversation. There wasn't much more to say.

I've been expecting something like this since Ham went up in January. The Soviets have been ready for months, it seems — maybe longer. Gagarin is 27 years old, a jet pilot, apparently a man of considerable personal charm. The photographs we're seeing are of a young, grinning man in an orange flight suit with "CCCP" on his helmet. He looks like he's won a bet.

They had the courage, or the ruthlessness, to send a man before we were certain the technology was ready. We debated and planned and sent Ham to prove the capsule was safe. They just sent a man. Whether that speaks to Soviet boldness or Soviet disregard for human life, I genuinely don't know. Probably both.

What does it mean that they did it first?

I've been arguing with myself about this all day. On one hand: a Soviet man in orbit is not a Soviet weapon pointed at me. Gagarin didn't hurt anyone. The scientific achievement, separated from the politics, is genuinely magnificent. A human being looked down at the Earth from space and came back to tell us about it. He reportedly said the Earth was beautiful. That he could see the oceans and the clouds. That it was small, and blue, and surrounded by darkness.

On the other hand: the propaganda implications are enormous. Every nation watching this race — every country in Asia and Africa and Latin America deciding whether to align with the Americans or the Soviets — just watched the Soviet Union do something the United States could not. The implication, which Khrushchev is going to hammer home at every opportunity, is that Soviet communism produces superior science and superior achievements.

I don't believe that. I believe we could have beaten them if we'd been less cautious and better organized. But I can't prove it from here in Ohio.

What I keep coming back to is Gagarin himself. He's not a villain. He's a test pilot who volunteered for an extraordinary mission and executed it correctly. He orbited the Earth. Whatever the politics, he did something no human being had ever done before, and he did it well, and he came back alive.

The Soviets won this round. We'll see about the next one.

Somewhere in Houston and in Huntsville and at Cape Canaveral tonight, a lot of very capable people are staying late at their desks. I hope they are anyway.
EOT
    ],

    [
        'date'     => '1961-05-05',
        'title'    => 'Alan Shepard, American',
        'category' => 'Mercury Program',
        'tags'     => 'alan shepard,freedom 7,mercury,first american in space',
        'excerpt'  => 'He went. He came back. He was in space for fifteen minutes and thirty-seven seconds, and the whole country stopped to watch.',
        'content'  => <<<'EOT'
He went. He came back. He was in space for fifteen minutes and thirty-seven seconds, and the whole country stopped to watch.

Alan Shepard launched this morning at 9:34 AM from Cape Canaveral aboard Freedom 7. His mission was suborbital — meaning he went up and came back down in a great arc, never completing a full orbit like Gagarin did three weeks ago. The Redstone rocket burned for two minutes, propelling the capsule to an altitude of 116 miles before it arced back down and splashed into the Atlantic. From liftoff to splashdown: fifteen minutes, thirty-seven seconds.

Fifteen minutes. People keep noting how brief it was compared to Gagarin's 108-minute orbit. They're not wrong. This is not the same thing. Shepard did not orbit. He proved we can get a man into space and bring him back alive, but the Soviets proved that weeks ago. We are still behind.

But here's what I keep thinking about: Shepard flew that thing. He wasn't just a passenger. After the rocket burned out and the capsule was coasting in space, he switched to manual control and maneuvered the capsule himself — changing its attitude with the hand controller, proving that a human pilot can operate a spacecraft. He reported his readings, described what he saw, performed every task they asked of him. He was the most capable person in the vehicle, not just a warm body strapped to a rocket.

The launch was delayed for hours this morning because of weather, then equipment issues. Shepard sat in that capsule for more than four hours before they finally lit the candle. I cannot imagine that wait. You are strapped into a steel cone on top of a rocket that is extremely flammable, waiting for someone else to decide you can go. Four hours.

He reportedly told the launch controllers, at one point during the delays, to "fix your little problem and light this candle." Which is the most Shepard thing I've heard. That man was ready to go.

When the rocket finally launched, Betty and I were watching on television — we had called Harold over, and his wife Edna too, and we sat in the living room barely breathing. The rocket went up and up and the announcer counted altitude and then the capsule separated and then it was quiet for several minutes and then they reported splashdown and I heard Betty exhale next to me like she'd been holding her breath for five minutes, which she probably had.

He came back. He landed safely in the Atlantic, was recovered by helicopter, was described as "in excellent condition" — smiling, waving, chipper. The photographs tonight show a small man in a silver suit climbing out of a small capsule on the deck of a recovery ship, grinning.

President Kennedy watched the launch from the White House. He is apparently going to make a big speech about space soon — bigger than just Mercury. There are rumors of a commitment to land on the Moon before the end of the decade. I'll believe it when I hear it, but I believe Kennedy might actually say it.

Tonight, for fifteen minutes and thirty-seven seconds, an American was in space. It wasn't Gagarin's orbit, but it was ours, and it was real, and Shepard did it exactly right. That has to count for something.

It counts for a lot, actually. It counts for enough.
EOT
    ],

    [
        'date'     => '1961-05-25',
        'title'    => 'Before This Decade Is Out',
        'category' => 'Space Race',
        'tags'     => 'kennedy,moon,apollo program,before this decade,congress',
        'excerpt'  => 'The President of the United States stood up in Congress today and said we are going to land a man on the Moon and return him safely to Earth before 1970.',
        'content'  => <<<'EOT'
The President of the United States stood up in Congress today and said we are going to land a man on the Moon and return him safely to Earth before 1970.

I heard it live on the radio. Kennedy's voice, careful and precise: "I believe that this nation should commit itself to achieving the goal, before this decade is out, of landing a man on the Moon and returning him safely to the Earth."

I had to sit down.

Not because it shocked me exactly — there had been talk for weeks, after the Bay of Pigs disaster, after Gagarin, that Kennedy was looking for something dramatic to say about space. But hearing it stated flatly, publicly, as a national commitment — before this decade is out — put it in a different category than rumor and speculation. This is now a promise. Made in front of the Congress of the United States and the entire world.

We have one American who has been in space. For fifteen minutes. We have not orbited. We have not left Earth orbit. We have not gone anywhere near the Moon. The Moon is 240,000 miles away and we have rockets that can loft fifteen minutes of suborbital arc.

Before 1970. Nine years.

Kennedy acknowledged the difficulty: "No single space project in this period will be more impressive to mankind, or more important for the long-range exploration of space; and none will be so difficult or expensive to accomplish." He asked Congress for $531 million additional appropriation this fiscal year alone. He said "we choose to go to space in this decade and do the other things, not because they are easy, but because they are hard."

He said "not because they are easy, but because they are hard."

I've been repeating that phrase all day. There's something about it that cuts through all the strategic calculation and Cold War posturing and gets at something simpler: we're going to do this because it's the hardest thing anyone has ever attempted, and that's reason enough.

Harold thinks it's crazy. Over the fence this evening he said, "Andrews, we can barely get a man into space for fifteen minutes and this man wants to go to the Moon in eight years?" I told him that seemed like exactly the kind of thing presidents were for — stating an audacious goal and forcing everyone to figure out how to achieve it. Harold looked skeptical. Harold generally looks skeptical.

Betty was quiet through most of my explaining. Then she said, "Do you think they'll actually do it?" And I said I didn't know, but I thought we had to try, and I thought Kennedy meant it, and I thought that mattered. She said, "I hope whoever goes comes back."

That's the thing, isn't it. It's not a flag-planting exercise. He said "landing a man on the Moon and returning him safely to Earth." The safety clause is part of the commitment. We're not talking about sending someone to die on the Moon for propaganda purposes. We're talking about a round trip.

Nine years from now. I'll be 36. Betty will be 33. We might have children by then. I want to be able to tell them: yes, I watched the whole thing. I was paying attention when it happened.

I am paying attention.
EOT
    ],

    [
        'date'     => '1961-07-21',
        'title'    => 'Liberty Bell 7 Sinks',
        'category' => 'Mercury Program',
        'tags'     => 'gus grissom,liberty bell 7,hatch,capsule loss',
        'excerpt'  => 'Gus Grissom flew his Mercury mission today, MR-4, and the flight itself was fine — but then the capsule sank.',
        'content'  => <<<'EOT'
Gus Grissom flew his Mercury mission today — MR-4, Liberty Bell 7 — and the flight itself was fine. He went up to 118 miles, flew for fifteen minutes like Shepard, did his job competently. But then, after splashdown, something went wrong with the hatch.

The explosive hatch cover blew prematurely — they're not sure if Grissom hit the trigger accidentally or if it malfunctioned — and the ocean started flooding in. Grissom got out, but he couldn't get back to the recovery helicopter quickly enough, and Liberty Bell 7 sank. Grissom nearly sank too; his suit flooded, which apparently shouldn't have happened, and he was struggling in the water by the time the recovery swimmers got to him.

He's fine. He's fine, but he's visibly shaken in the photographs, and there are already people in the press suggesting he panicked and blew the hatch himself. I find that infuriating. The man flew into space. He did everything he was asked. If the hatch blew prematurely — which seems like the most likely explanation for a man as disciplined as Grissom — that's an engineering problem, not a character problem.

The capsule is on the bottom of the Atlantic. They couldn't recover it. Which means we've lost our data and our hardware. That's a real loss.

But Grissom is alive, and the flight itself was a success. I want to say that clearly, because I think the coverage over the next few days is going to be unkind to him.

The space program moves on. John Glenn's orbital mission is being prepared. The pressure is enormous — Gherman Titov orbited the Earth seventeen times last week in Vostok 2. Seventeen times. Shepard and Grissom did fifteen minutes. Titov spent more than a full day in space. The gap between us is not closing as fast as I would like.

Glenn is next. If anyone can answer Titov, it's Glenn.

I think about Grissom treading water in the Atlantic with his suit flooding, knowing his capsule was going down behind him. That's a lousy way to end a spaceflight. He deserves better from the commentary I'm already hearing.
EOT
    ],

    [
        'date'     => '1962-02-20',
        'title'    => 'John Glenn Orbits the Earth',
        'category' => 'Mercury Program',
        'tags'     => 'john glenn,friendship 7,orbit,mercury atlas',
        'excerpt'  => 'John Glenn orbited the Earth three times today. Three times around the entire planet, nearly five hours, and he came back.',
        'content'  => <<<'EOT'
John Glenn orbited the Earth three times today. Three times around the entire planet in four hours and fifty-five minutes, and he came back.

Betty and I watched the launch on television. Harold came over. Edna brought rolls. We sat in the living room and watched a man named John Glenn climb into a capsule on top of an Atlas rocket and become the third American in space — but the first American to orbit.

The Atlas rocket is not the Redstone rocket that Shepard and Grissom flew. The Atlas is an ICBM — an intercontinental ballistic missile — modified to carry people instead of warheads. It's taller, faster, more powerful, and significantly less reliable. There have been Atlas failures. The people planning this mission knew that. Glenn knew that.

He launched at 9:47 AM after a series of weather and technical delays that stretched the wait over several weeks from the original target date. When the rocket finally lifted off, the crowd at Cape Canaveral apparently erupted, and I don't blame them. That machine was carrying a man into orbit for the first time in American history.

Friendship 7. Glenn named his capsule Friendship 7 — the same number as the Mercury Seven astronauts. A nice touch. Characteristic of the man, actually — thoughtful, patriotic without being grandiose.

There was a crisis during the flight that wasn't fully explained until after. A sensor indicated the heat shield on the capsule might be loose. If the heat shield comes off on re-entry, the capsule burns. The man inside burns. NASA decided not to tell Glenn immediately, but they also told him to keep the retrorocket package attached to the heat shield through re-entry, which would hold it in place if the sensor reading was correct. Glenn flew through the ionosphere — the radio blackout — not knowing for certain whether his heat shield was intact.

It wasn't until he was through the worst of re-entry and they could talk to him again that they knew he'd made it.

The sensor reading turned out to be a false alarm. But they didn't know that when he was burning back through the atmosphere.

I keep thinking about Glenn keeping his cool through that. He noticed the straps of the retrorocket package burning away outside his window and said, calmly, to the communicator: "That's a real fireball outside." He was describing his own potential death and he was calm.

These are remarkable people. I don't say that often enough, because it risks becoming a cliché, but it's just true. John Glenn is a remarkable person.

He made three orbits. He could see the sunsets and sunrises — sixteen of them per day from orbital altitude, he noted. He could see Australia at night, lit up below him. He could see thunderstorms from above, which he said looked like flashbulbs. He was genuinely doing what we all wanted him to do: looking at the Earth and telling us what it looked like.

He landed in the Atlantic, was recovered, and was taken to Cape Canaveral for the medical checks. Then he was flown to Washington for a ticker-tape parade. Four million people in New York, apparently. Kennedy met him personally. Glenn spoke to a joint session of Congress.

He said: "We have only begun."

Three orbits. We are in this race.
EOT
    ],

    [
        'date'     => '1962-05-24',
        'title'    => 'Scott Carpenter\'s Overshoot',
        'category' => 'Mercury Program',
        'tags'     => 'scott carpenter,aurora 7,overshoot,mercury atlas',
        'excerpt'  => 'Scott Carpenter orbited three times today and then overshot his landing zone by 250 miles. For forty minutes the news reported him missing.',
        'content'  => <<<'EOT'
Scott Carpenter orbited three times today and then overshot his landing zone by 250 miles. For forty minutes the news reported him missing.

Forty minutes. Betty and I sat in front of the television and watched the commentator explain, carefully, that Aurora 7 had come down somewhere in the Atlantic but they didn't know exactly where, and the recovery ships were searching.

He was fine. He was found forty minutes later, sitting in a life raft next to his capsule, apparently eating a tube of food and watching the tropical sky. But those forty minutes were awful, and I suspect NASA thought they were awful too, because the post-flight reports are not particularly complimentary.

Here's what happened, as best I understand it: Carpenter was supposed to be focused on re-entry procedures but got engrossed in observing something outside his window — he described strange luminescent particles that he couldn't explain (John Glenn had mentioned them too). He was late executing his retrorocket burn, and he also had a hand-controller attitude control problem that caused him to waste fuel. When he did fire the retrorocets, they were slightly misaligned. The combination of the late burn and the misalignment meant he came down much farther from the target zone than planned.

NASA is not publicly criticizing Carpenter. But from what I can read between the lines of the official statements, there are people who are unhappy with his situational awareness during re-entry. A pilot who is distracted by interesting things outside the window while the clock is ticking on a critical procedure sequence has prioritized the wrong thing.

I feel conflicted. On one hand: he's an astronaut, he was trained, he had a job to do and the re-entry procedure is not the time for sightseeing. On the other hand: he was in space. He could see things no human being had ever been able to see before. The particles he was watching turned out to be frozen condensation from the spacecraft systems — not aliens, not a mystery — but he didn't know that at the time. Can we really blame a man for being curious up there?

The answer the program will give, I'm sure, is: yes, we can. The spacecraft is a machine that requires correct operation to deliver a man safely home, and curiosity is not a substitute for procedure.

Carpenter won't fly again in Mercury. I have a feeling about this. He's safe, the mission accomplished its objectives, but the margin of error in that re-entry was too thin.

The remaining Mercury missions are Schirra and Cooper. After that, Gemini. After that, Apollo.

After that, the Moon.

We're moving forward, even when individual flights have problems. I think that's how this works. One step at a time, even when the steps are imperfect.
EOT
    ],

    [
        'date'     => '1962-10-03',
        'title'    => 'Wally Schirra Does It Right',
        'category' => 'Mercury Program',
        'tags'     => 'wally schirra,sigma 7,mercury atlas,textbook flight',
        'excerpt'  => 'Wally Schirra flew six orbits today in what everyone is calling a "textbook flight." After Carpenter\'s problems, that seems like exactly what was needed.',
        'content'  => <<<'EOT'
Wally Schirra flew six orbits today in what everyone is calling a "textbook flight." After Carpenter's problems two months ago, that seems like exactly what this program needed.

Sigma 7. Nine hours and thirteen minutes. Six times around the Earth. Schirra came down within eight miles of the recovery ship — essentially perfect — and was recovered quickly and in excellent health.

The thing that made this mission notable, beyond just the success, was how precisely Schirra flew it. He was meticulous about fuel usage — he conserved so much attitude control fuel that at the end of the mission he had more than 78% of his maneuvering fuel remaining. He ran the capsule in "chimp mode," as the astronauts call it (manually passive, letting the automatic systems do most of the work) for long stretches to preserve propellant. He did everything correctly, on schedule, in order.

Schirra is a different kind of personality than Shepard or Glenn or Carpenter. Where Glenn is the earnest patriot and Carpenter is the curious scientist and Shepard is the aggressive competitor, Schirra is — from all accounts — a jokester, a man who defuses tension with a well-timed wisecrack. But when it matters, he's apparently one of the most precise and technically disciplined pilots in the program. He flew Sigma 7 like a craftsman showing what the machine could do.

I find I'm glad the Mercury program is ending on this note. One more mission — Gordon Cooper's, scheduled for next year — and then Mercury is done. Gemini is next, and Gemini is where things get serious for the Moon program.

Schirra did his job. He did it perfectly. Not flashily, not dramatically. He flew his mission and came home and the recovery ship barely had to move to find him.

That's what excellence looks like, I suppose. Not the spectacular, but the precise.
EOT
    ],

    [
        'date'     => '1963-05-15',
        'title'    => 'Gordon Cooper Goes Last',
        'category' => 'Mercury Program',
        'tags'     => 'gordon cooper,faith 7,mercury atlas,longest mercury flight',
        'excerpt'  => 'Gordon Cooper became the last American to fly in Mercury today, spending more than 34 hours in space — longer than all previous American missions combined.',
        'content'  => <<<'EOT'
Gordon Cooper became the last American to fly in Mercury today, spending more than 34 hours in space on 22 orbits — longer than all previous American missions combined.

Faith 7. The mission almost didn't end well. On the final orbit, Cooper's automatic control system failed completely — a short circuit in the Carbon Dioxide system caused a cascading series of failures that took out the autopilot, the attitude control, and several other systems. Cooper had to fly the entire re-entry sequence manually, calculating the retrorocket firing time himself with a stopwatch and using the stars as his orientation reference.

He landed within four miles of the recovery ship. Manually. With a dead autopilot. Using a stopwatch and star navigation.

The news reports are effusive, and for once, I think they're entitled to be. What Cooper demonstrated is exactly what the program's argument for human pilots has always been: a machine cannot improvise. When the automatic systems fail, a human pilot can still get himself home. The question people raised — do you even need a pilot, or is the spacecraft just a fancy can that computers steer? — Cooper answered definitively. You need the pilot.

He also became the first American to sleep in space — he napped twice during the mission. This apparently concerned some people on the ground, but his vital signs were fine and he was rested and alert for re-entry. Good instincts.

Mercury is done. Six manned flights over two years. One capsule sank. One missed its landing zone by 250 miles. One demonstrated that automated systems can fail at the worst moment and a pilot can still bring the ship home. All six men came back alive.

Whatever comes next has to be built on this foundation. The Moon mission requires staying in space much longer than 34 hours. It requires two capsules operating together, docking, transferring crew. It requires leaving the capsule entirely — spacewalking — and working outside the vehicle. It requires navigating not just to Earth orbit but to lunar orbit and back.

Mercury asked: can a human being survive in space? The answer is yes.

Gemini will ask: can a human being work in space? That's the next question.

I'm going to miss Mercury. This is the beginning, and beginnings have a particular feeling to them — tentative, brave, fragile. The men who flew Mercury did something nobody had done before, with tools nobody was sure would work, in an environment nobody had firsthand experience in. They made it look like something a person could do.

That matters. That will always matter.

Godspeed, Faith 7. Goodnight, Mercury.
EOT
    ],

    [
        'date'     => '1963-06-16',
        'title'    => 'A Soviet Woman in Space',
        'category' => 'Space Race',
        'tags'     => 'valentina tereshkova,vostok 6,soviet,first woman in space',
        'excerpt'  => 'The Soviets did it again — put someone in space before we could. This time it was a woman: Valentina Tereshkova.',
        'content'  => <<<'EOT'
The Soviets did it again. Put someone in space before we could. This time it was a woman.

Valentina Tereshkova launched aboard Vostok 6 three days ago and landed today after nearly three days in orbit — 48 orbits, 70 hours and 50 minutes. She is 26 years old. She was a factory worker and amateur parachutist before she was selected for the cosmonaut program. She has no flight training in the conventional sense — no jet pilot background, which all our Mercury astronauts had.

And she just spent three days in space.

The American press response is a mixture of genuine admiration and barely disguised defensiveness. Some columnists are writing about how this demonstrates the Soviet commitment to equality — look, they'll put a woman in space! — while noting sardonically that the United States has no such program. Other columnists are suggesting this was a propaganda stunt and that Tereshkova's mission was not technically demanding.

Both things can be true. It can be a propaganda stunt and also a genuine achievement.

Betty was uncharacteristically sharp about the American commentary. She said, "They sent a woman to space and we're arguing about whether it counts. What does that say about us?" I didn't have a good answer.

The honest comparison: Tereshkova spent longer in space than all six Mercury astronauts combined. She flew a completely automated spacecraft — the pilot's role in Vostok is different from Mercury — but she was there, orbiting, reporting observations, conducting experiments. The same people who criticized Carpenter for being too interested in things outside the window are not, I notice, criticizing Tereshkova for the same.

There is no woman in the NASA astronaut program. There are women who could qualify — there are women who participated in studies that showed they were physically and psychologically as capable as the Mercury astronauts — but the program requires military test pilot experience, which women are not permitted to accumulate because they aren't permitted to be military test pilots. This is a closed loop, and someone at NASA made the choice to close it.

Will there be an American woman in space? I think eventually, yes. But not soon. Not in Gemini, and probably not in early Apollo. By the time we put a woman in orbit the Soviets will have lapped us on this particular metric.

I'm proud of Valentina Tereshkova. She orbited the Earth and I don't much care what country she was doing it for. She went up there. She came back. She looked down at the planet and saw what it looks like from the outside.

That's worth being proud of.

I just wish we'd done it too.
EOT
    ],

    [
        'date'     => '1963-11-22',
        'title'    => 'Dallas',
        'category' => 'Space Race',
        'tags'     => 'kennedy assassination,dallas,jfk,national grief',
        'excerpt'  => 'I am not going to write very much tonight. The President is dead.',
        'content'  => <<<'EOT'
I am not going to write very much tonight. The President is dead.

Kennedy was shot in Dallas this afternoon. He was pronounced dead at 1:00 PM Central Time at Parkland Memorial Hospital. Vice President Johnson took the oath of office on Air Force One at 2:38 PM, with Jacqueline Kennedy standing beside him in her pink suit, her husband's blood still on it.

I've been sitting with this notebook for two hours trying to figure out what to write. I keep thinking about the speech in May 1962. "We choose to go to the Moon in this decade." His voice, measured and confident, telling us what we were going to do. We are going to the Moon because it is hard and that is exactly the reason to do it.

He won't be there when we get there. If we get there. If the program he launched survives his death and whoever comes next has the will to carry it forward.

I don't know what Johnson will do with the space program. He's a Texas pragmatist, a dealmaker, a man of the Senate. He was the one who pushed the NASA budget through Congress in the first place — he understands the strategic value. But Kennedy owned this personally in a way few presidents own anything. It was his. His speech, his commitment, his name on it.

The country is in shock. I went to the grocery store this afternoon, after the news came, and no one was speaking above a murmur. Betty came home from her sister's and she'd been crying. Harold came to the fence and just stood there for a while. He didn't have anything to say and neither did I.

Kennedy was 46 years old. Younger than my father.

I'm going to close this notebook and sit with Betty. The space program will still be there tomorrow. Tonight is for something else.
EOT
    ],

    [
        'date'     => '1964-01-10',
        'title'    => 'Gemini — The Stepping Stone',
        'category' => 'Gemini Program',
        'tags'     => 'gemini,two-man crew,rendezvous,spacewalk,lunar preparation',
        'excerpt'  => 'Now that I\'ve had a few weeks with it, let me explain what I understand about Project Gemini and why it matters.',
        'content'  => <<<'EOT'
Now that I've had a few weeks to think about it, let me explain what I understand about Project Gemini and why it matters so much for the Moon landing.

The problem with going to the Moon is not just "building a bigger rocket." The problem is that everything about a lunar mission is different from anything we've done in Mercury. Mercury was proof of concept: can a human being survive in space? Yes. Now the Moon program needs to answer a whole different set of questions:

Can two people work together in space? Can they dock two spacecraft in orbit? Can a person leave the capsule and work outside it? Can we navigate to a specific location in space — not just orbit the Earth, but aim for the Moon and hit it? Can astronauts function for fourteen days in space (the round trip to the Moon takes about eight days, but there's margin needed)?

Gemini is designed to answer all of these questions before Apollo commits to the Moon.

Two-person crews. This is significant — the Gemini capsule carries two astronauts, and they have to work together, communicate with each other, divide the workload. Management in a confined space. Psychology as well as engineering.

Rendezvous and docking. Two Gemini spacecraft — or a Gemini and an Agena target vehicle — will have to find each other in orbit and link up. This is essential for Apollo, because the lunar mission involves separating the landing craft from the command ship, landing on the Moon, returning, and then docking again in lunar orbit to rejoin. If you can't dock in orbit, you can't do the Moon landing.

EVA. Spacewalking. The astronaut has to leave the capsule in a pressure suit, work outside it, and get back in. This is necessary because things go wrong in space, and sometimes the fix requires someone going outside to fix them. Also, astronauts will have to go outside on the Moon's surface, which is an EVA by another name.

Long duration. Gemini missions are going to run up to fourteen days. We need to know that human bodies hold up for that long — bones, muscles, heart, everything.

Johnson is still committed to the Moon goal. Gave a speech explicitly endorsing it. For now, the program continues. I think it will survive Kennedy's death. Too much momentum, too many contractors, too many jobs, too much riding on it.

Gemini starts with unmanned test missions this year. The first crewed mission — Gemini 3 — is expected in 1965 with Gus Grissom commanding. Yes, Gus Grissom, the man the press was unkind to after Liberty Bell 7 sank. NASA knows who their best people are, even when the newspapers don't.

We're back on track. Slower, heavier-hearted, missing a president who owned this dream more personally than any other. But back on track.

Forward.
EOT
    ],

    [
        'date'     => '1965-03-23',
        'title'    => 'Gemini 3 — Molly Brown',
        'category' => 'Gemini Program',
        'tags'     => 'gemini 3,grissom,young,molly brown,first gemini crewed',
        'excerpt'  => 'Gus Grissom flew again today. Three orbits, four hours and fifty-two minutes. He named the capsule Molly Brown.',
        'content'  => <<<'EOT'
Gus Grissom flew again today. Three orbits, four hours and fifty-two minutes. He named the capsule Molly Brown — after the "unsinkable" woman from the musical, a deliberate joke about Liberty Bell 7. Anyone who thought Grissom wasn't in on the joke about his own history was wrong.

He flew with John Young, a rookie, and by all accounts it was a good mission. Grissom manually changed the spacecraft's orbit — the first orbital maneuver by an American crew, which is a key Gemini milestone. They tested the reentry control system and the capsule's various attitude control modes. They landed somewhat short of the target, which prompted some discomfort for Grissom, who had a rocky history with splashdowns, but both astronauts were recovered in good health.

Young also, apparently, smuggled a corned beef sandwich aboard, which Grissom took a bite of and then put away when crumbs started floating around the cabin. This resulted in a mild congressional inquiry about food safety protocols, which is exactly the kind of thing Congress does when it wants to feel involved.

Grissom is cleared. That's what Gemini 3 means for me personally. The man who lost Liberty Bell 7 in 1961, who had to endure years of insinuation that he panicked, now commands Gemini 3 and performs a successful orbital maneuver and comes back safely and with dignity. He's the chief of the astronaut office. He's going to command Apollo 1 when that comes around.

History is giving Gus Grissom a second chapter, and he's writing it well.

There are nine more Gemini missions to go. The real tests — rendezvous, docking, spacewalking, long duration — are coming up. But Gemini 3 proves the spacecraft works and the crew can fly it.

Foundation laid. Upward.
EOT
    ],

    [
        'date'     => '1965-06-03',
        'title'    => 'Ed White Walks in Space',
        'category' => 'Gemini Program',
        'tags'     => 'ed white,eva,spacewalk,gemini 4,extravehicular activity',
        'excerpt'  => 'An American walked in space today. Ed White opened the hatch of Gemini 4 and floated outside for twenty-three minutes, connected to the capsule by a twenty-five foot tether.',
        'content'  => <<<'EOT'
An American walked in space today.

Ed White opened the hatch of Gemini 4 and floated outside for twenty-three minutes, connected to the capsule by a twenty-five foot tether, maneuvering with a small hand-held gas jet gun. He described it as "the most comfortable part of the flight" and had to be ordered back inside by Mission Control when his time was up.

The Soviet cosmonaut Alexei Leonov did a spacewalk in March — the Soviets again got there first — but White's EVA was longer and he had better mobility control with the gas gun. It's not a victory, exactly, but it's not a consolation either. We needed to prove we could do this, and we did.

The photograph they released tonight is extraordinary. White in a white spacesuit, legs apart, arms extended, the blue-black limb of the Earth curving behind him and stars beyond that. A human being, floating in space, unprotected from the void by nothing except 21 layers of fabric and pressure and life support. He's tethered, yes. But the tether is thin, and the suit is all there is between him and absolute nothing.

I stared at that photograph for a long time.

White reportedly said, when ordered back inside: "I'm coming back in... and it's the saddest moment of my life." I believe him. You have floated free in the universe, entirely outside the cocoon of the spacecraft, with nothing above you and nothing below you — just the stars and the Earth turning slowly underneath. And then you have to close the hatch and come back in to the cabin.

I would not want to come back in either.

Gemini 4 also set a new American endurance record — four days, 1 hour and 56 minutes for Jim McDivitt and White together. Progress on all fronts.

The hard tests are coming: Gemini 6 and 7 are going to attempt rendezvous, and Gemini 8 will attempt docking with an unmanned Agena target vehicle. Those are the skills Apollo absolutely requires. The EVA is important, but it's almost — I want to say almost a demonstration of possibility rather than a core Apollo requirement. The core requirements are rendezvous, docking, and long duration.

But first: a man floated free in space and didn't want to come back in.

That's not nothing. That's something very large.
EOT
    ],

    [
        'date'     => '1965-08-21',
        'title'    => 'Eight Days — Gemini 5',
        'category' => 'Gemini Program',
        'tags'     => 'gemini 5,cooper,conrad,eight days,endurance',
        'excerpt'  => 'Gordon Cooper and Pete Conrad just spent eight days in space. Eight days. The Moon and back takes about eight days.',
        'content'  => <<<'EOT'
Gordon Cooper and Pete Conrad just spent eight days in space. Eight days.

The Moon and back takes about eight days. The Gemini 5 mission, which ended today, has now proven that two human beings can survive in a spacecraft for the duration of a lunar mission. That's the simple bottom line.

It wasn't a comfortable eight days. The fuel cells that were supposed to power the spacecraft developed a problem early on — the pressure in the oxygen reactant supply tank dropped, which threatened to cut the mission short. Cooper and Conrad powered down to minimum consumption and coasted for a day while engineers figured out if they could keep going. They could, and did. Eight days.

Both men landed with some orthostatic hypotension — when they stood up after landing, their blood pressure dropped significantly because their cardiovascular systems had adjusted to weightlessness. They were physically weakened. After eight days, the human body has adapted to the weightless environment in ways that make re-adaptation to gravity taxing. Their muscles had thinned somewhat. Their blood volume had decreased.

This is important information for the Moon program. It means recovery time is needed after a lunar mission. It means exercise protocols in space need to be developed and enforced. It means we can't assume a crew will step off the lunar lander and perform at full capacity.

But they survived it. They were functional. They did their jobs for eight days, dealt with a fuel cell emergency, and came home. The biological case for lunar duration has been made.

Cooper flew Mercury's last mission. Now he's flown Gemini 5. He keeps adding miles to his record in a quiet, professional way. I've always liked Cooper — something laconic and capable about him. He doesn't perform for the cameras the way some of them do.

The Gemini program is moving fast now. Gemini 6 and 7 are the rendezvous mission. That's next. That's the last big piece before we can say: we know we can go to the Moon.
EOT
    ],

    [
        'date'     => '1965-12-15',
        'title'    => 'Two Ships, One Orbit — Gemini 6 and 7',
        'category' => 'Gemini Program',
        'tags'     => 'gemini 6,gemini 7,rendezvous,borman,lovell,schirra,stafford',
        'excerpt'  => 'Yesterday, two American spacecraft flew within a foot of each other in orbit. The same orbit, at the same time, separated by twelve inches.',
        'content'  => <<<'EOT'
Yesterday, two American spacecraft flew within a foot of each other in orbit.

The same orbit. At the same time. Separated by twelve inches.

Gemini 7 has been up there for eleven days now, with Frank Borman and Jim Lovell aboard, when Gemini 6 launched yesterday with Wally Schirra and Tom Stafford. Schirra maneuvered Gemini 6 into rendezvous with Gemini 7 using orbital mechanics that I have been trying to understand from the newspaper explanations and mostly failing to follow at the level of actual calculation, but grasping in principle: you have to change your orbit to intercept another spacecraft, and the counterintuitive thing is that speeding up raises your orbit (which makes you go slower relative to a lower orbit), so the geometry of orbital rendezvous is backwards from what your instincts tell you.

They figured it out. Schirra flew Gemini 6 to within one foot of Gemini 7. They flew in formation for five and a half hours. The astronauts could look out their windows and see each other — four people in two tiny capsules, orbiting the Earth together.

Borman and Lovell are still up there. Fourteen days total when they come down. Two weeks in space. They're going to beat Cooper and Conrad's eight-day record considerably.

What the rendezvous demonstrates is the core competency for Apollo: find another spacecraft in orbit and close to within touching distance. For Apollo, that other spacecraft is the lunar module ascending from the Moon's surface, and the astronaut in the command module has to find it and lock on and dock. This is the dress rehearsal.

Schirra and Stafford are back. Borman and Lovell come down Saturday. And they apparently serenaded Mission Control — Schirra played "Jingle Bells" on a harmonica he'd smuggled aboard, while Stafford played small bells. The timing, given it's two weeks before Christmas, was perfect.

Two ships, one orbit. The Moon is getting closer.
EOT
    ],

    [
        'date'     => '1966-03-16',
        'title'    => 'Docking — Gemini 8 and the Agena',
        'category' => 'Gemini Program',
        'tags'     => 'gemini 8,neil armstrong,dave scott,docking,agena,emergency',
        'excerpt'  => 'Neil Armstrong docked with the Agena target vehicle today — the first docking in space — and then had to cut the mission short when Gemini 8 started spinning.',
        'content'  => <<<'EOT'
Neil Armstrong docked with the Agena target vehicle today — the first docking in space — and then had to cut the mission short when Gemini 8 started spinning.

The docking worked. Armstrong flew Gemini 8 to the Agena, an unmanned target vehicle that had launched earlier, and the two spacecraft locked together. First docking in history. Apollo just got cleared for the Moon trip, at least in principle.

Then something went wrong.

After docking, the joined spacecraft started rolling. Mission Control and the crew assumed it was the Agena's thruster misfiring, so they tried to compensate with Gemini's thrusters, which made it worse. Eventually the roll accelerated to the point where both men were approaching the limit of conscious action — roughly one revolution per second, serious enough to cause incapacitation.

Armstrong made the decision to undock from the Agena. This is the correct call, but it had a consequence: one of Gemini 8's own thrusters was stuck open, and once the combined mass of the Agena was removed, Gemini 8 started spinning even faster. The roll rate got above one revolution per second before Armstrong managed to stabilize it by activating the re-entry control thrusters, which was a last resort because using those thrusters meant the mission rules required an immediate abort.

They came down safely. Three days in space instead of the planned three. Dave Scott's EVA — which had been the main objective after docking — never happened.

Neil Armstrong made the right call under pressure. Not just the undocking decision, but the whole sequence. With a pilot who panicked or hesitated, that spin could have become fatal. He didn't panic and he didn't hesitate and he brought both of them home.

I've been paying attention to Armstrong for a while now. He's quieter than most of them. More technical, less theatrical. He came from a research pilot background at Edwards, where they test things at the limits of what's physically possible, and you develop a very matter-of-fact relationship with emergency.

I have a feeling we'll hear more from Neil Armstrong. Something about the way he handles himself in a crisis.
EOT
    ],

    [
        'date'     => '1966-11-11',
        'title'    => 'Gemini\'s Last Mission',
        'category' => 'Gemini Program',
        'tags'     => 'gemini 12,lovell,aldrin,eva,gemini program ends',
        'excerpt'  => 'Gemini 12 splashed down today, and with it the Gemini program is complete. Buzz Aldrin spent five and a half hours outside the capsule.',
        'content'  => <<<'EOT'
Gemini 12 splashed down today, and with it the Gemini program is complete.

Two years, ten crewed missions, thirty crew members flown (counting repeats). We learned to dock, to spacewalk, to rendezvous, to survive two weeks in space. We answered every question we needed to answer before Apollo. Gemini did its job.

The final mission had Jim Lovell in command — his third spaceflight, which is remarkable — and Buzz Aldrin making history with extravehicular activity. Aldrin spent five hours and thirty minutes outside the capsule over three separate EVAs. Previous spacewalks had been difficult — astronauts got exhausted fighting the suits, couldn't complete their tasks, had to cut EVAs short. Aldrin solved this by approaching spacewalking differently: he worked slowly and methodically, rested frequently, and used underwater training (at the neutral buoyancy pool he'd been developing) to prepare. He proved that productive EVA was possible.

The rendezvous radar on Gemini 12 failed, and Aldrin computed the rendezvous manually using star sights and orbital mechanics charts. Like Cooper's manual re-entry in Faith 7, this is another reminder that you want a human brain in the loop when the computers fail.

Gemini is done. Apollo is next.

The score so far in the space race: Soviets have more firsts. First satellite. First living creature in orbit. First man in orbit. First woman in orbit. First spacewalk. First multi-person crew. But the United States has closed the gap dramatically. We can dock. We can spacewalk efficiently. We can survive two weeks in space. We can rendezvous. The skills for a Moon landing are in place.

The next thing is Apollo. And Apollo starts with an unmanned test, then a crewed test, then building toward the lunar mission. Kennedy said before the decade was out. The decade ends in three and a half years. It's possible. I think it's possible.

I'm going to keep this notebook through whatever comes next.
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

    $cat_id = get_category_id_4( $p['category'] );

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

echo "\n=== Import 4 complete: {$created} created, {$skipped} skipped ===\n";
