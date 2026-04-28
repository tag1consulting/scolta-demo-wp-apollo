<?php
/**
 * Apollo Blog Import - File 11
 * Final batch to reach 200+ posts
 * Run via: ddev wp eval 'require "/var/www/html/import/import-11.php";'
 */

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname(__FILE__) . '/../' );
    require dirname(__FILE__) . '/../wp-load.php';
}

function get_category_id_11( $name ) {
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
        'date'     => '1960-04-01',
        'title'    => 'TIROS 1 — The Weather Eye',
        'category' => 'Technology',
        'tags'     => 'tiros,weather satellite,earth observation,cloud cover',
        'excerpt'  => 'The first weather satellite launched yesterday. TIROS 1 is photographing cloud cover from orbit and transmitting the images back to Earth. This changes weather forecasting.',
        'content'  => <<<'EOT'
The first weather satellite launched yesterday. TIROS 1 — Television Infrared Observation Satellite — is photographing cloud cover from orbit and transmitting the images back to Earth.

This is going to change weather forecasting completely.

Currently, weather data comes from ground stations, weather balloons, and ships at sea. Each station measures temperature, pressure, humidity, and wind at its location, and meteorologists stitch these point measurements together into weather maps. The gaps — the open ocean, the polar regions, the interior of large continents — are filled in by interpolation and estimation.

TIROS takes a photograph from 450 miles up that shows the cloud pattern over an area thousands of miles wide. In a single image, you can see the spiral structure of a hurricane, the frontal boundary of a cold system, the clear air following a storm. Pattern recognition that was previously impossible from the ground.

The images coming back aren't high resolution — it's early technology, and the cameras are limited. But the concept works. You can see where the weather is.

The practical implications are immediate: ships at sea will have better hurricane warnings. Coastal communities will have more warning time for major storms. Military operations will have better meteorological support. All of this from a camera in orbit.

But there's something larger happening too. TIROS is the first operational satellite designed not for the space race's prestige competition but for practical utility on Earth. It's not going somewhere, it's not proving a capability — it's providing a service.

This is what the space program eventually becomes: not just exploration, but infrastructure. Satellites that serve navigation, communication, weather, Earth observation, the things that make ordinary life better.

TIROS is Year One of that.
EOT
    ],

    [
        'date'     => '1961-11-29',
        'title'    => 'Enos the Chimp Orbits',
        'category' => 'Mercury Program',
        'tags'     => 'enos,chimpanzee,mercury atlas,orbital test,ma-5',
        'excerpt'  => 'Enos the chimpanzee orbited the Earth twice yesterday in the final unmanned Mercury test before Glenn\'s orbital flight. He performed well despite equipment problems.',
        'content'  => <<<'EOT'
Enos the chimpanzee orbited the Earth twice yesterday in the final unmanned Mercury test before John Glenn's orbital flight. He performed well under difficult conditions.

Enos — a four-year-old chimpanzee from the Cameroons, trained for two and a half years — was supposed to do three orbits, but a malfunctioning thruster caused the capsule to overheat and Mission Control decided to bring him down after two. He was apparently uncomfortable and frustrated: the overheating combined with a lever-response problem (the device was misbehaving, delivering shocks when it shouldn't) made the flight unpleasant.

He came back fine. After recovery he reportedly shook hands with everyone and seemed happy to be out of the capsule.

What does Enos's flight prove? That the Mercury Atlas system works for orbital flight with a biological payload. Glenn's flight will be the next use of the Mercury Atlas, and unlike the Redstone rocket used for Shepard and Grissom's suborbital flights, the Atlas has a history of failures. Enos's successful two-orbit flight (even with the thruster problem) validates the most important aspects of the orbital mission design.

Ham went up in January on a suborbital flight. Enos has now orbited. We've been extremely careful about validating each step before committing humans. I believe this is right even when it feels slow.

Glenn is next. The real thing. I've been following this since Gagarin and I'm ready.
EOT
    ],

    [
        'date'     => '1962-10-22',
        'title'    => 'The Cuban Missile Crisis, From Ohio',
        'category' => 'Space Race',
        'tags'     => 'cuba,missiles,cold war,kennedy,khrushchev,crisis,nuclear',
        'excerpt'  => 'Kennedy went on television tonight and told us the Soviets have nuclear missiles in Cuba, 90 miles from Florida. We may be going to war.',
        'content'  => <<<'EOT'
Kennedy went on television tonight and told us the Soviets have nuclear missiles in Cuba. Ninety miles from Florida.

I've been sitting with this for two hours and I don't entirely know what to write.

The space race that I've been following for five years — the competition to put people in orbit and eventually on the Moon — is, at its foundation, a competition between two nations pointing nuclear weapons at each other. I've noted this before in passing and then gone back to writing about rockets and orbital mechanics. Tonight it's impossible to go back.

Kennedy said we know the missiles are there from aerial reconnaissance — the U-2 photos. He said he's demanding the Soviets remove them. He said any nuclear missile launched from Cuba against any nation in the Western Hemisphere will be considered an attack by the Soviet Union requiring full retaliatory response.

Full retaliatory response. He means nuclear weapons.

Betty and I sat in the living room and watched the broadcast and then sat in silence for a while. She finally said, "What do we do?" I didn't have an answer. There is no individual action for a man in Ohio in this situation. We wait and trust that the leaders of two nuclear powers have enough sense to pull back from the edge.

I think about the astronauts. John Glenn orbited three times in February. Scott Carpenter overshot in May. Schirra's mission is in October. These are men who have demonstrated extraordinary courage in machines that might kill them. They are willing to die for the program. Are they willing to die for Kennedy's ultimatum? Are any of us?

I don't have a political stance on whether Kennedy is right or wrong. I think removing Soviet nuclear missiles from Cuba is a reasonable thing to want. I don't know if this is worth the risk of what we're edging toward.

I'm going to try to sleep. Betty is already in bed.

The rockets we're building to go to the Moon are cousins to the rockets pointed at us tonight. I've known that all along. Tonight it's hard to think about anything else.
EOT
    ],

    [
        'date'     => '1963-02-15',
        'title'    => 'The Space Race and the Arms Race',
        'category' => 'Space Race',
        'tags'     => 'arms race,missiles,deterrence,cold war,nuclear,space race connection',
        'excerpt'  => 'The Cuban Missile Crisis is over and we survived it. I\'ve been thinking about the connection between the rockets going to the Moon and the ones pointed at us.',
        'content'  => <<<'EOT'
The Cuban Missile Crisis is three months behind us and we survived it.

I've been sitting with the relationship between the space race and the arms race, trying to understand it clearly.

The rockets are the same technology. The Saturn V is not an ICBM, but the Atlas rocket that John Glenn flew on is an ICBM. The Soviet N1 lunar rocket is derived from the same engineering tradition as the Soviet SS-6, which launched Sputnik and which was also the world's first operational intercontinental ballistic missile.

This is not coincidence. It's the same physics problem: put a large mass on a small rocket and send it far away very fast. Whether that mass is a nuclear warhead or a chimpanzee is a policy decision, not an engineering one.

The deterrence argument for nuclear weapons goes: if both sides have enough weapons to destroy each other no matter who strikes first, neither side will strike. This is called mutually assured destruction, which has the apt acronym MAD, and it is the reason we didn't have World War III in October 1962. Kennedy had nuclear weapons. Khrushchev had nuclear weapons. Neither was willing to launch first, knowing that launching first didn't mean winning.

The space program runs on top of this deterrence structure. The rockets that could reach Moscow are the same rockets that can reach the Moon. The engineers who make the Moon missions work are the same engineers who design the ICBM guidance systems. The satellite reconnaissance that found the Cuban missiles is flown by the same spacecraft technology that will someday photograph Mars.

I don't know what to do with this. It's the condition we live in. The space program is genuinely inspiring and is also embedded in a military-industrial structure designed to deliver nuclear warheads. Both are true.

What I choose to focus on is the part that's inspiring. Not because the military part doesn't matter — it does — but because I can't change it, and I can appreciate the inspiring part without pretending the rest away.

I'm grateful we survived October 1962. I'm grateful the rockets are also going to the Moon.
EOT
    ],

    [
        'date'     => '1965-05-25',
        'title'    => 'James McDivitt and the Gemini 4 Flight',
        'category' => 'Gemini Program',
        'tags'     => 'gemini 4,mcdivitt,white,four days,earth orbit',
        'excerpt'  => 'Jim McDivitt and Ed White flew for four days on Gemini 4. White walked in space. McDivitt tried to fly a rendezvous with the spent second stage and found it harder than expected.',
        'content'  => <<<'EOT'
Jim McDivitt and Ed White flew four days on Gemini 4, and the mission produced two distinct stories.

The more famous one is Ed White's spacewalk — the American EVA that I've written about, the twenty-three minutes floating free, the gas gun, the reluctance to come back inside. That was June 3, early in the mission.

The less famous story is McDivitt's attempt to fly a rendezvous with the spent second stage of the Titan II rocket that launched them. This was supposed to be a practice rendezvous — find the stage, maneuver close, practice the skills needed for later Gemini missions.

It didn't work. McDivitt quickly discovered that orbital rendezvous is completely counterintuitive. His instinct was to thrust toward the target. But thrusting toward an object in a lower orbit speeds you up, which raises your orbit, which actually takes you farther from the lower-orbit object. The correct approach involves complex orbital mechanics maneuvers that feel backwards to a pilot trained in atmospheric flight.

McDivitt ran low on fuel trying to reach the second stage and had to give up. This failure was one of the most useful results of the Gemini program: it demonstrated conclusively that you cannot use aircraft instincts for orbital rendezvous. You need specifically trained orbital mechanics skills and computer support.

The later Gemini crews had this training. Gemini 6 and 7's rendezvous worked precisely. Gemini 8's and 9's docking attempts encountered different problems. But they all had better orbital mechanics preparation because Gemini 4 showed what happened without it.

McDivitt went on to command Apollo 9, where he flew the lunar module's first crewed test. His Gemini 4 experience — learning what orbital mechanics actually requires — was part of what prepared him.

Everything teaches something. Even the failures.
EOT
    ],

    [
        'date'     => '1966-09-12',
        'title'    => 'The Agena — The Target That Keeps Coming Back',
        'category' => 'Technology',
        'tags'     => 'agena,target vehicle,docking,atlas agena,rendezvous',
        'excerpt'  => 'The Agena target vehicle is flying on more Gemini missions than I can easily count. Let me explain what it is and why it matters.',
        'content'  => <<<'EOT'
The Agena target vehicle has flown on more Gemini missions than I can easily keep track of, so let me explain what it is and why it keeps appearing.

The Agena-D is an upper-stage rocket that has been used by the Air Force for satellite launches for years. For the Gemini program, it was adapted as a target: launched on an Atlas rocket, it reaches a specific orbit, turns itself around to face the approaching Gemini capsule, and waits.

Why do you need a target? Gemini needs to practice rendezvous and docking — skills Apollo requires for the lunar mission. You need something to rendezvous with. The Agena is ideal: it has a standardized docking collar that matches the Gemini nose, it can fire its own engine (the astronauts can use this to change their combined orbit), and it's well-understood hardware.

The complications: four of the Agenas launched for Gemini missions failed to reach orbit correctly, denying the crews their docking target. Gemini 6 lost its Agena and was repurposed into a rendezvous mission with Gemini 7 instead (a creative fix). Gemini 9's Agena was replaced with the Augmented Target Docking Adapter, which then failed to jettison its shroud. Gemini 10 docked with both its Agena and the dead Gemini 8 Agena that was still in orbit. Gemini 11 used its Agena to boost to 853 miles. Gemini 12 docked cleanly and completed the EVA work that earlier missions had struggled with.

Six Agenas across six missions, each one adding to the collective understanding of what rendezvous and docking actually requires. The Apollo docking with the lunar module is the application of everything learned from these Agena flights.

The Agena itself is expendable — it stays in orbit after the Gemini mission ends, and its orbit decays over months or years, ending in atmospheric re-entry. Somewhere in the Pacific, probably, there are Agena components on the ocean floor that once helped train astronauts for the Moon.
EOT
    ],

    [
        'date'     => '1968-03-01',
        'title'    => 'The Astronauts I\'ve Been Getting to Know',
        'category' => 'Personal',
        'tags'     => 'astronauts,profiles,characters,getting to know,books,magazines',
        'excerpt'  => 'I\'ve been reading everything I can find about the astronauts. Not their technical skills — I\'ve been trying to understand them as people.',
        'content'  => <<<'EOT'
I've been reading everything I can find about the astronauts. Not their technical skills — I know those reasonably well by now. I've been trying to understand them as people.

Frank Borman is a West Point man, Air Force, serious to the point of severity. He believes in the mission in a way that seems almost religious. He pushed himself through the Apollo 1 fire investigation with a discipline that was almost frightening — methodically, relentlessly finding what went wrong and how to fix it. He's not warm in interviews. But the people who've worked with him describe a man of absolute reliability and total commitment.

Jim Lovell is the opposite temperature. Cheerful, gregarious, the kind of man who makes people comfortable. He's also extraordinarily experienced — more hours in space than almost anyone else, veteran of Gemini 7 (14 days with Borman), Gemini 12, and now training for Apollo 8. He navigates by instinct as much as calculation and generally comes out right.

Buzz Aldrin is complicated. His father was an aviator and friend of Orville Wright; his mother's maiden name was "Moon" (no, really); he went to West Point and flew combat missions in Korea and got a doctorate at MIT. He's driven in a way that comes across as difficult to some and magnetic to others. He's been overlooked for assignments he thought he deserved, and he's aware of it, and it shows sometimes.

Mike Collins is the most relaxed of the senior astronauts. He's written the best prose of any of them — the press conference transcripts don't do him justice, but his interviews reveal a dry wit and genuine self-reflection. He knows he's orbiting the Moon while his crewmates walk on it, and he seems to be genuinely okay with that.

Neil Armstrong is the one I know least, somehow, despite writing about him the most. He reveals very little. What I know: excellent instincts, great judgment under pressure, extreme modesty. He will be the most famous person alive in six months. I don't think it will change him.

These are the people going to the Moon. I've been watching them for years. I'm glad I know them, even at this distance.
EOT
    ],

    [
        'date'     => '1969-07-05',
        'title'    => 'Harold\'s Question',
        'category' => 'Personal',
        'tags'     => 'harold,personal,conversation,meaning,lunar landing preparation,friends',
        'excerpt'  => 'Harold came over last Saturday and asked me a question I didn\'t expect. He asked if I thought they\'d really make it back.',
        'content'  => <<<'EOT'
Harold came over last Saturday and asked me a question I didn't expect.

We were in the backyard, Harold helping me repair the fence where the post has been leaning since spring. He's good with this kind of work; I'm better at watching than doing. We were working in the heat and talking about the mission — eleven days to launch — and Harold set down his hammer and looked at me.

"Do you think they'll really make it back?" he said.

I said yes. I've said yes every time someone has asked me. I believe yes, for reasons I can lay out: the engineering is sound, the testing has been methodical, the team is extraordinary, the simulations have covered the failure modes. The probability is high.

But Harold shook his head. "I know you think they'll make it back," he said. "That's not what I'm asking. I'm asking if you could actually think about it. If they don't."

I put down what I was holding and thought about it for a moment.

What would it mean if they don't? If the descent engine fails, or the ascent engine fails, or the guidance computer fails in a way Jack Garman can't fix, or the re-entry heat shield cracks, or any of a hundred things. What would it mean?

"It would be terrible," I said.

"Would it change your mind? About the program?"

I thought about that for a longer moment. "No," I said finally. "It would make me very sad. It would be a tragedy. It wouldn't convince me that we were wrong to try."

Harold nodded slowly. He went back to the fence post. We didn't say anything for a while.

"You've been watching this for twelve years," he finally said. "You deserve for it to work out."

Coming from Harold, that's about as sentimental as he gets. I told him I appreciated it. He shrugged and said the fence wasn't going to fix itself.

Eleven days to launch.
EOT
    ],

    [
        'date'     => '1969-07-18',
        'title'    => 'Two Days Out',
        'category' => 'Apollo 11',
        'tags'     => 'apollo 11,en route,translunar coast,two days to landing',
        'excerpt'  => 'Apollo 11 is two days out from the Moon. Armstrong, Aldrin, and Collins are coasting through space at about 2,000 miles per hour now, slowing as Earth\'s gravity pulls them back.',
        'content'  => <<<'EOT'
Apollo 11 is two days out from the Moon. They launched on Wednesday; it's Friday now; they'll enter lunar orbit Sunday.

The astronauts are coasting at this point — the translunar injection burn happened on the day of launch, and since then they've been in free fall along their ballistic trajectory. They're not firing any engines unless a course correction is needed (one small correction was made on the first day).

The velocity at this point is about 2,500 miles per hour, much slower than the 24,000+ mph they were doing right after the injection burn. The reason: Earth's gravity has been slowing them down for two days. As they get farther from Earth, the deceleration decreases. When they cross the L1 point — the place where the Moon's gravity exceeds Earth's gravity — they'll start accelerating toward the Moon.

That L1 point is about 210,000 miles from Earth, roughly 30,000 miles from the Moon. At that distance, after coasting for about 60 hours, the spacecraft will begin to pick up speed as the Moon's gravity takes over.

The astronauts are passing time: meals, sleep schedules, equipment checks, the continuous low-level monitoring of all systems. The television broadcasts have been showing Collins's cooking (rehydrated food, squeeze tubes) and the view out the window — an increasingly small Earth, an increasingly large Moon.

Armstrong is apparently not giving press conferences from the spacecraft. He answers questions from Mission Control with "roger that" and reads systems data. This is exactly in character.

Somewhere out there, right now, traveling at 2,500 miles per hour between two worlds, three people are eating and sleeping and checking their gauges. Ordinary work in an incomprehensible place.

Two days.
EOT
    ],

    [
        'date'     => '1969-07-23',
        'title'    => 'Aldrin\'s Communion on the Moon',
        'category' => 'Apollo 11',
        'tags'     => 'aldrin,communion,faith,private,sea of tranquility,eagle',
        'excerpt'  => 'I learned recently that Buzz Aldrin took communion on the surface of the Moon. He\'s spoken about it in interviews. I\'ve been sitting with this for a few days.',
        'content'  => <<<'EOT'
I learned recently that Buzz Aldrin took communion on the surface of the Moon.

He was an elder at Webster Presbyterian Church in Houston. Before the mission, his pastor gave him a small kit: a vial of wine, a small host, a card with a Bible verse. The kit fit in a personal preference kit — the small collection of personal items each astronaut was allowed to bring.

Shortly after landing, while Armstrong was preparing for the EVA, Aldrin radioed: "I'd like to take this opportunity to ask every person listening in, whoever and wherever they may be, to pause for a moment and contemplate the events of the past few hours and to give thanks in his or her own way."

He then performed a private communion, pouring the wine into a small chalice (one of the few liquids ever poured on the Moon's surface), reading the Scripture quietly — "I am the vine, you are the branches" — and taking the elements.

He didn't broadcast this publicly. He told his congregation about it afterward. He's discussed it in interviews since.

I've been sitting with this for a few days. Not because I have a strong opinion about it either way, but because it feels important to the texture of what the Moon landing actually was.

It was not only an engineering achievement. It was a human event, with all the private interior life that human beings bring to significant moments. Armstrong was methodical and precise, every astronaut's astronaut. Aldrin was the man who poured wine on the Moon and said a prayer, quietly, in the moments before stepping out.

Both of them were there. Both things are part of what happened on July 20.

The world saw Armstrong's first step. Aldrin's communion was private. Both are real.
EOT
    ],

    [
        'date'     => '1969-11-20',
        'title'    => 'Pete Conrad\'s First Words on the Moon',
        'category' => 'Apollo 12',
        'tags'     => 'pete conrad,apollo 12,first words,quote,humor,bet',
        'excerpt'  => 'I promised earlier that I\'d revisit Pete Conrad\'s first words on the Moon. He won a bet. His exact words deserve to be in this notebook.',
        'content'  => <<<'EOT'
I promised earlier that I'd revisit Pete Conrad's first words on the Moon. He won a bet. His exact words deserve to be in this notebook.

Conrad stepped off the Intrepid's ladder onto the lunar surface and said: "Whoopee! Man, that may have been a small one for Neil, but that's a long one for me!"

He is 5'6". Armstrong is 5'11".

The journalist Oriana Fallaci had bet Conrad that he couldn't say anything inappropriate and have it reported reverentially. He told her: "You owe me a bet, because I'm gonna say it." Fallaci apparently paid up.

I want to note what this says about Conrad, because it's not just a funny story. The entire world was watching. The most witnessed single step in human history, or close to it. The moment was designed to be solemn — the flag, the quote, the weight of the occasion. And Conrad, who is not a man without seriousness (he flew four missions, walked on the Moon, commanded the Skylab rescue), decided that the right thing to do in that moment was to be himself.

He was himself. A short, cheerful, precise man who found the whole thing wonderful and said so in his own voice.

Armstrong's first words will be remembered forever. They carry the weight of the occasion, the "giant leap" framing that turned the step into a statement. Conrad's words will be remembered differently — they'll be remembered because they were Pete Conrad, unmistakably, in a moment when someone else might have tried to be Neil Armstrong.

Don't try to be Neil Armstrong. Be Pete Conrad.

There's something worth remembering there, beyond the Moon.
EOT
    ],

    [
        'date'     => '1970-05-30',
        'title'    => 'What I\'ve Learned from the Scientists',
        'category'  => 'Science',
        'tags'     => 'lunar science,geologists,scientists,samples,what we learned',
        'excerpt'  => 'The preliminary examination of the Apollo 11 and 12 samples is done. I\'ve been reading the published results. Here\'s what we\'ve learned from the rocks.',
        'content'  => <<<'EOT'
The preliminary examination of the Apollo 11 and 12 samples is complete and the initial scientific papers are out. I've been reading them — or reading the summaries, since the papers themselves require a geology background I don't have.

Here's what we know from the first two landings.

Age: The Apollo 11 basalts from the Sea of Tranquility are 3.7 billion years old — confirmed by argon-argon dating. The basalts crystallized from lava that flowed 3.7 billion years ago, before complex life existed on Earth (Earth's oldest confirmed life is about 3.5 billion years old). The Apollo 12 samples from the Ocean of Storms are 3.2 billion years old — younger, suggesting different lava flow events at different times.

Composition: The Apollo 11 basalts are high in titanium — much more than typical Earth basalts. The Apollo 12 basalts are lower in titanium. This variation tells us the lunar mantle has compositional differences from region to region, which is useful for understanding how the Moon formed and differentiated.

Regolith: The surface soil is a complex mixture of crystalline rock fragments, glass (from meteorite impact melting), and agglutinates — small particles bonded together by glass. The glass spherules are omnipresent, forming from the spray of melt created by micrometeorite impacts.

Water: None detected in any sample. The Moon is drier than the driest place on Earth by many orders of magnitude. This is consistent with the giant impact formation hypothesis — if the Moon formed from high-temperature debris thrown off by a collision, any water would have boiled away.

Shock metamorphism: The samples show extensive evidence of shock from meteorite impacts — mineral grains with planar deformation features, glass veins from shock melting, fractured crystals. The bombardment record is written in the structure of every grain.

Forty-seven pounds from Apollo 11. Seventy-five from Apollo 12. This is a tiny fraction of what we eventually need, but it's changed the geological picture of the inner solar system in fundamental ways.

We've been to the Moon twice and we know more about how it formed than we knew before either visit. That seems like the right exchange.
EOT
    ],

    [
        'date'     => '1971-01-20',
        'title'    => 'Between Missions — The Waiting',
        'category' => 'Personal',
        'tags'     => 'between missions,waiting,Apollo 14,personal,patience',
        'excerpt'  => 'It\'s been almost two months since Apollo 13 came home and two months until Apollo 14 will (hopefully) land. This is the between time.',
        'content'  => <<<'EOT'
It's the between time.

Apollo 13 came home in April after not landing — the crew is safe, the program survived, the engineering failure was diagnosed. Apollo 14 is scheduled for January 31 — about ten days from now as I write this. Between these two events, there's been the investigation, the hardware review, the oxygen tank redesign, the adjustment to service module procedures.

And there's been ordinary life.

I've been doing what I always do between missions: reading. The geology papers from Apollo 11 and 12 are in the public literature now and I've been working through the summaries. I've been reading about the Fra Mauro formation, which is where Shepard and Mitchell are going — impact ejecta from the Imbrium basin, the huge impact that happened about 3.9 billion years ago and sent debris across much of the Moon's nearside. If they bring back Fra Mauro samples, we can date the Imbrium event precisely.

Betty started a new job — part-time at the library, which she's been talking about for years. She started in October and she's happy. She brings home books, which we've always had around the house but more systematically now. Last week she brought home a book about celestial navigation — the kind used by sailors. I asked why. She said she thought she should understand what they were doing when they navigate to the Moon.

I was touched by this. She's been listening to me talk about this program for thirteen years and she finally got curious enough to start studying it herself. We spent Sunday afternoon going through the book together, working out the principle of using a sextant to determine latitude.

Fourteen years from Sputnik to Apollo 14. Betty's been tolerating my obsession for fourteen years and now she's reading about celestial navigation.

That's something.
EOT
    ],

    [
        'date'     => '1972-10-05',
        'title'    => 'Pioneer 10 Is Leaving Earth\'s Neighborhood',
        'category' => 'Science',
        'tags'     => 'pioneer 10,jupiter,asteroid belt,outer solar system,unmanned probe',
        'excerpt'  => 'Pioneer 10 launched in March and is now the fastest human-made object, heading for Jupiter. It will be the first spacecraft to cross the asteroid belt and the first to visit Jupiter.',
        'content'  => <<<'EOT'
Pioneer 10 launched in March and is heading for Jupiter. It will cross the asteroid belt — nobody knows exactly how much debris is there to worry about — and arrive at Jupiter in December 1973.

This is the beginning of the outer solar system program.

Pioneer 10 is small — 570 pounds, about the size of a large oil drum. It carries instruments to measure the interplanetary medium (the particles and magnetic fields between the planets), to photograph Jupiter and measure its radiation environment, and to search for more asteroids in the belt. It also carries a gold-anodized aluminum plaque designed by Carl Sagan and Frank Drake — a message to any beings who might find the spacecraft in the remote future, showing a man and woman, the spacecraft itself, our position in the galaxy, and other information.

The asteroid belt crossing is the first unknown. Nobody has crossed it before. Models suggest the belt is mostly empty space with rocks widely dispersed — not the dense obstacle field of science fiction — but the models could be wrong.

If Pioneer 10 survives the asteroid belt (current indications are good; it's already partway through), it will photograph Jupiter in December 1973. Jupiter is 500 million miles from Earth. We've never had photographs from close range.

After Jupiter, Pioneer 10 will continue outward. It has no more fuel for major maneuvers; its trajectory after Jupiter flyby will take it out of the solar system entirely. It will be the first human-made object to leave the solar system, sometime in the 1980s or 1990s.

The plaque is for whatever finds it after that. In a universe 13.8 billion years old, a spacecraft traveling at about 27,000 mph doesn't get very far in human time scales. But the plaque will last as long as the spacecraft, which could be billions of years.

We have left a message in a bottle, floating outward into the galaxy. I find that beautiful.
EOT
    ],

    [
        'date'     => '1972-08-12',
        'title'    => 'Counting Down to the Last Landing',
        'category' => 'Apollo Program',
        'tags'     => 'apollo 17,last mission,counting down,cernan,schmitt,evans',
        'excerpt'  => 'Apollo 17 launches in December. Gene Cernan will command, Jack Schmitt will walk on the Moon, Ron Evans will orbit. This will be the last.',
        'content'  => <<<'EOT'
Apollo 17 launches in December. Gene Cernan will command, Jack Schmitt will be lunar module pilot, Ron Evans will fly the command module.

This will be the last.

I've known it was coming for a while — Apollo 18, 19, and 20 were cancelled in 1970, NASA's budget having contracted significantly. There was never going to be an indefinite Apollo series; it was always going to end. But knowing the end is coming and knowing it's December are different.

Cernan is the right commander for the last mission. He was the man who flew Snoopy to 47,000 feet above the Moon on Apollo 10 and had to pull back instead of landing. He was on the Moon's doorstep and turned around because the mission design said turn around. Three years later, he gets to go back and land. That has a satisfying narrative shape to it.

Jack Schmitt is the first professional scientist — a geologist — to walk on the Moon. Every previous moonwalker was a pilot who had been trained in geology. Schmitt trained the others in geology; now he goes himself. He was picked specifically for this last mission because the scientific community pushed hard for a geologist, and NASA's management agreed that with the program ending, the science case was paramount.

Ron Evans is another who's been waiting a long time. A Navy pilot, Vietnam veteran, he's flown support missions for test programs. Apollo 17 is his first and only spaceflight.

The Taurus-Littrow valley site is ambitious: a deep valley on the edge of the Serenitatis basin, with highlands rising 6,000 feet on both sides. The rocks there should sample both mare basalt and the ancient highlands. If they bring back a piece of the original lunar crust — anorthosite, which nobody has yet retrieved — this will be the mission that does it.

I'm watching. I'll be watching in December. I'll watch the last one as carefully as I watched the first.
EOT
    ],

    [
        'date'     => '1970-07-01',
        'title'    => 'The Science Astronauts',
        'category' => 'Apollo Program',
        'tags'     => 'scientist astronauts,jack schmitt,geologist,group 4,group 6',
        'excerpt'  => 'NASA selected its first group of scientist-astronauts in 1965 and a second group in 1967. They\'ve been waiting for years to fly. Their time is coming.',
        'content'  => <<<'EOT'
NASA selected its first group of scientist-astronauts in 1965 and a second group in 1967. These are people selected for their scientific credentials — physicists, geologists, doctors — who then went through pilot training.

They've been waiting a long time to fly.

The original astronaut groups (1, 2, 3) were all test pilots. Group 4, selected in 1965, was explicitly "scientist-astronauts" — six people, all with doctorates. Harrison "Jack" Schmitt, a geologist from Harvard. Owen Garriott, an electrical engineer. Joe Kerwin, a physician. Ed Gibson, a physicist. Curtis Michel, a physicist and solar wind expert. Duane Graveline, a physician (who left the program early).

These six are now seven years into the program, having spent years learning to fly jet aircraft and then waiting for mission assignments. The pilot astronauts had Gemini and early Apollo to fly; the scientists have been in line behind them.

The irony: Jack Schmitt, who trained the Apollo pilots in geology — who walked them through the training sites in Iceland and Hawaii and Arizona, who explained the difference between basalt and anorthosite and breccia — has watched those pilots bring back samples from the Moon and describe what they were finding, sometimes incorrectly, sometimes missing things a geologist would have noticed immediately.

Schmitt will be on Apollo 17, the last mission. He'll walk on the Moon with Cernan and bring a geologist's eyes to the Taurus-Littrow valley. The scientific community fought hard for this assignment; they argued that with the program ending, the one scientist who had to fly was the geologist.

They were right.

The first scientists are heading to space. Garriott is flying on Skylab 3. Kerwin on Skylab 2. And Schmitt on the Moon.

Seven years of waiting. The science is finally going to happen the right way.
EOT
    ],

    [
        'date'     => '1973-04-22',
        'title'    => 'My Last Entry for a While',
        'category' => 'Personal',
        'tags'     => 'closing,last entry,notebooks end,looking ahead,personal,closure',
        'excerpt'  => 'I\'ve been keeping this notebook since 1957. The Apollo program is over. Skylab is still going. I\'m going to write one more time before I put it away for a while.',
        'content'  => <<<'EOT'
I've been keeping this notebook since October 1957. Fifteen and a half years.

Apollo 17 came home in December. The program is over. Skylab is ongoing — the second crew is up there now, and the third crew is training. The Space Shuttle is in development. The program continues.

But the thing I was watching for, the specific thing that Kennedy said we'd do and that I believed we'd do and that twelve million technical complications stood between us and doing — that's done. The twelve men. The footprints. The rocks. The flag.

I've filled four notebooks. This is late in the fourth one and I'm going to move to a fifth if I keep going, and I think before I do that I want to stop and describe what I've been.

I've been a witness. Not a participant — I never worked in the space program, never stood at a console in Houston, never drove to Cape Canaveral to watch a launch in person. I was in Ohio, reading newspapers and magazines, watching television, filling notebooks with observations and reactions.

But witness matters. History is made by the people who do things and preserved by the people who record them. The astronauts and engineers and flight controllers did the things; their official records and technical reports will survive in NASA archives. But what it felt like, from the outside, from a mid-century American suburb, from a kitchen table in Ohio at 2 AM after the first Moon landing — that's what these notebooks have been trying to capture.

Betty asked me a few months ago what I was going to do with them. I said keep them. Maybe someday I'd write something from them. Maybe someday someone would find them interesting. She said she found them interesting and I should stop keeping them a secret.

So I will stop keeping them a secret. I'm going to keep writing.

The Space Shuttle will fly sometime in the 1970s. Pioneer 10 will reach Jupiter next year. Pioneer 11 is on its way to Saturn. Voyager spacecraft are planned for Jupiter and Saturn and beyond.

The universe is very large. We've only just started.

I'm still paying attention. I'll be here when the next thing happens.
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

    $cat_id = get_category_id_11( $p['category'] );

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

echo "\n=== Import 11 complete: {$created} created, {$skipped} skipped ===\n";
