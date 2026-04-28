<?php
/**
 * Apollo Blog Import - File 9
 * Posts: Science deep-dives, Soviet program updates, personal posts, Skylab
 * Run via: ddev wp eval 'require "/var/www/html/import/import-9.php";'
 */

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname(__FILE__) . '/../' );
    require dirname(__FILE__) . '/../wp-load.php';
}

function get_category_id_9( $name ) {
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
        'date'     => '1962-08-12',
        'title'    => 'The Soviets Float Two Ships',
        'category' => 'Space Race',
        'tags'     => 'vostok 3,vostok 4,dual flight,soviet,nikolayev,popovich',
        'excerpt'  => 'The Soviets launched two Vostok spacecraft in two days and flew them in near-formation. They were never close enough to rendezvous, but the propaganda value was enormous.',
        'content'  => <<<'EOT'
The Soviets launched two Vostok spacecraft in two days and flew them in near-formation for the better part of four days.

Vostok 3 launched on August 11 with Andrian Nikolayev aboard. Vostok 4 launched on August 12 with Pavel Popovich aboard. At closest approach, the two capsules were within three miles of each other — which sounds like rendezvous but absolutely is not. They were placed in similar orbits by the launch trajectory, not maneuvered to proximity. The Vostok capsules have no maneuvering capability; they go where the rocket puts them.

But from the outside, from the newspapers and the radio coverage, it sounds like the Soviets flew two people in space simultaneously and brought them close together. The headlines say "dual flight" and show the cosmonauts' faces side by side.

The propaganda effect is real even if the technical achievement is more modest than it sounds.

What the dual flight does demonstrate: the Soviets have a reliable enough launch capability to put two spacecraft in orbit on consecutive days. That's not nothing. Reliability is hard. The Vostok program has had no in-flight crewmember fatalities (the Komarov accident is years away). The Soviets are flying with some regularity.

Meanwhile we're preparing for John Glenn's orbital flight, which hasn't happened yet at the time of this particular flight.

The score: Soviets have multiple orbital flights. We have two 15-minute suborbital arcs. The gap feels enormous from where I sit. I keep reminding myself that we're behind but we're moving.

Glenn in February. That's the next milestone.

I need to believe it.
EOT
    ],

    [
        'date'     => '1963-10-12',
        'title'    => 'Voskhod — Three People, No Spacesuits',
        'category' => 'Space Race',
        'tags'     => 'voskhod,soviet,three crew,no spacesuits,cramped,political pressure',
        'excerpt'  => 'The Soviets launched three people into space today in a capsule designed for one, with no spacesuits. That\'s either a brilliant demonstration or a reckless stunt.',
        'content'  => <<<'EOT'
The Soviets launched three people into space today in a Voskhod spacecraft.

Three people. In a vehicle that's essentially a modified Vostok, which was designed for one. To fit three people, they removed the ejection seat that Gagarin and the other Vostok cosmonauts used for landing (the Vostok actually ejected its pilot, who parachuted down separately — the capsule landed hard). They also removed the spacesuits. The crew of three flew in street clothes with no pressure protection.

If the cabin depressurized, they would die. There is no backup. They have no suits.

The Soviet program made this choice — three people without spacesuits rather than one or two with them — because three is more impressive than two, and being first with three is more impressive than being second with two after Gemini.

I find this troubling. It's a safety regression, not a progression. The Voskhod program appears to be designed primarily for propaganda value — to accumulate "firsts" — rather than as a scientific or engineering development program. Three people is a first. First spacewalk (from Voskhod 2 next year, reportedly) will be a first. These are real achievements, but they're packaged in a program that seems to be taking shortcuts.

The contrast with Mercury, which carefully added capability one mission at a time and never flew without life support that could handle a decompression, is stark. Whether that comparison favors the Soviets (bolder, faster) or the Americans (more careful, more systematic) depends on whether Voskhod and its cosmonauts survive.

So far, so good. The three Voskhod crew members are alive and apparently healthy.

But I keep thinking: no suits.
EOT
    ],

    [
        'date'     => '1964-10-14',
        'title'    => 'Khrushchev Falls — What It Means for the Race',
        'category' => 'Space Race',
        'tags'     => 'khrushchev,brezhnev,soviet leadership,politics,space program',
        'excerpt'  => 'Nikita Khrushchev was removed from power yesterday. His successors are Brezhnev and Kosygin. What does this mean for the Soviet space program?',
        'content'  => <<<'EOT'
Nikita Khrushchev was removed from power yesterday and replaced by Leonid Brezhnev as General Secretary and Alexei Kosygin as Premier.

I've been thinking about what this means for the Soviet space program.

Khrushchev was the champion of the space effort. He understood its propaganda value instinctively and authorized the resources to pursue it aggressively. It was Khrushchev who pushed for Sputnik to be launched before America could do it, who pushed for Gagarin to beat Glenn, who celebrated every Soviet first as a demonstration that communist science was superior to capitalist science.

The space program under Khrushchev was not primarily a scientific enterprise. It was a competition, and Khrushchev set the rules of the competition: count firsts, accumulate them, beat the Americans at each milestone.

The new leadership's attitude is unknown. Brezhnev is a pragmatist; he cares about the Soviet military-industrial complex, about maintaining power, about the domestic economy. He may be less personally invested in the space race than Khrushchev was. He may also see the strategic and prestige value clearly enough to maintain the funding.

The technical side of the Soviet program is led by Chief Designer Sergei Korolev, who has had more to do with Soviet successes than any politician. His standing may actually improve with Khrushchev gone — Korolev spent years in the Gulag before being rehabilitated and put to work on rockets, and his relationship with Khrushchev was complicated.

What I suspect: the Soviet program will continue, because too much has been invested and too much prestige is at stake to stop. But it may become less reckless. Voskhod with no spacesuits may have been the end of the "impressiveness at any cost" approach.

Or it may not. It's genuinely hard to know from here.

The race continues. New drivers in Moscow.
EOT
    ],

    [
        'date'     => '1965-02-18',
        'title'    => 'Alexei Leonov Walks in Space First',
        'category' => 'Space Race',
        'tags'     => 'leonov,voskhod 2,spacewalk,first eva,soviet',
        'excerpt'  => 'Alexei Leonov exited the Voskhod 2 spacecraft today and spent twelve minutes floating in space — the first human EVA. He almost didn\'t make it back in.',
        'content'  => <<<'EOT'
Alexei Leonov exited the Voskhod 2 spacecraft today and spent twelve minutes floating in space outside the capsule. The first human extravehicular activity.

The Soviets did it again. Got there first.

But here's what the Soviets didn't announce publicly: Leonov almost didn't make it back inside.

His suit ballooned in the vacuum of space — the internal pressure pushed the suit outward, making it rigid and much larger than when he'd put it on. When he tried to re-enter the airlock, he couldn't fit. He spent eight minutes trying to get back in while his carbon dioxide level was rising and his body temperature was increasing from the exertion.

He had to bleed pressure from his suit — reduce the internal pressure below the minimum safe margin — to make himself small enough to fit through the airlock. He did this successfully and got back in. Nobody outside the Soviet program knew this for decades.

If he hadn't been able to bleed the suit down, he would have died outside the spacecraft.

I mention this not to diminish the achievement — Leonov's EVA was remarkable, and he handled a life-threatening situation with calm and competence — but to illustrate that the Soviet program's relationship with risk was different from ours in a specific way: they didn't always tell the public about the problems.

The Voskhod 2 mission also had trouble with the automatic landing system, forcing the crew to land manually in a remote forest area of the Ural mountains. They spent two nights in the forest before recovery teams could reach them.

An airlock failure, a suit that nearly killed the cosmonaut, a manual landing in a forest. The public announcement described it as a complete success.

I don't begrudge them the achievement. Leonov went outside and came back. That's extraordinary. But when I compare American openness about Mercury and Gemini problems (Carpenter's overshoot, Glenn's heat shield concern, the Apollo 1 investigation) with Soviet opacity, I appreciate the American approach more. We learn from public failures. Hidden failures are hidden problems.

The Ed White EVA is next for us. He'll do it right, with proper training and a suit that works. We'll see.
EOT
    ],

    [
        'date'     => '1966-04-24',
        'title'    => 'The Soviet Moon Program — What We Think We Know',
        'category' => 'Space Race',
        'tags'     => 'soviet lunar program,N1 rocket,korolev,secret,intelligence',
        'excerpt'  => 'What is the Soviet lunar program actually doing? The question is frustrating because so little is known publicly. Here\'s my best understanding.',
        'content'  => <<<'EOT'
What is the Soviet lunar program actually doing? The question is frustrating because so little is officially known.

What's been reported publicly, with varying degrees of reliability: The Soviets are developing a large rocket called the N1, analogous to our Saturn V. It has thirty NK-15 engines on the first stage (compared to our five F-1 engines). Thirty engines is an enormous engineering challenge — the more engines, the more complex the plumbing and the greater the probability of an engine failure. Our F-1 engines are much larger than their NK-15s; we chose fewer, bigger engines. The two choices reflect different engineering philosophies.

The N1 has not yet been tested publicly (as of my last information). We know about it primarily from satellite reconnaissance and from the observations of Western observers at Soviet facilities. It's a secret program in a way that NASA is explicitly not — Congress mandated that NASA be open, which is why we're watching launches on television while the Soviets announce results after the fact.

Sergei Korolev died in January 1966. This is a significant loss for the Soviet program. Korolev was the organizing genius behind Sputnik, Vostok, and the overall Soviet space effort — a man with the technical brilliance, the management authority, and the political connections to hold a complex program together. He also kept his identity secret from the Western public; we only know he was the "Chief Designer" from Soviet press references. His real name wasn't known in the West until after his death.

Who replaces Korolev is unclear. Different reports name different engineers. This kind of leadership transition is disruptive in any program.

My assessment, for what it's worth: the Soviet lunar program is real, well-funded, and aiming at either a manned landing or at minimum a manned lunar flyby before Apollo can get there. They won't succeed at landing first — I believe our program is too far ahead now — but the flyby possibility is real. The Zond program is designed for exactly that.

I could be wrong. The intelligence community doesn't tell me things, and I'm reading between lines that may be misleading.

But I believe we're ahead. I believe the Saturn V is a better machine than the N1, and our mission planning is better, and our training is more systematic, and our public accountability has made our program more honest with itself about problems.

I think we win. I'm not certain.
EOT
    ],

    [
        'date'     => '1966-12-05',
        'title'    => 'Christmas with the Space Program',
        'category' => 'Personal',
        'tags'     => 'christmas,personal,betty,harold,family,space program,1966',
        'excerpt'  => 'Christmas came and went and I found myself explaining the lunar module to Betty\'s brother, who had never heard of it and wanted to know if it was like a flying saucer.',
        'content'  => <<<'EOT'
Christmas came and went and I found myself at Betty's parents' house on Christmas Day explaining the lunar module to her brother Dale, who wanted to know if it was like a flying saucer.

Dale is 24 and works in an auto parts store and has a general awareness that the space program exists but could not tell you anything specific about it. He'd heard about the astronauts and the rocket and had the vague impression that we were going to the Moon "soon," but the details were a blank.

So I tried to explain it. The command module, the service module, the lunar module. The role of each. Why the lunar module is separate from the command module. Why you need an ascent stage and a descent stage. Why the whole thing is too heavy to land on Earth.

Dale listened, nodding, and then said, "So the Moon part doesn't come back?" And I explained no, only the capsule at the top comes back, the rest gets left behind. And he thought about that for a moment and said, "That seems like a waste."

I tried to explain the physics of it — that having a separate lightweight vehicle for the Moon landing is vastly more efficient than trying to land the whole mission on the Moon — but Dale was already moving on to whether Bonanza was going to be on television later.

I told Betty about this on the drive home and she pointed out that most people probably have Dale's level of knowledge, not mine. That I've been living with this for nine years now and it's obvious to me in a way it's not to people who don't follow it obsessively.

She's right. I sometimes forget that "rendezvous," "translunar injection," "command module," and "lunar orbit insertion" are not part of most people's working vocabulary. I've been absorbing the mission planning details for years and it feels natural to me.

This is why public communications matter. The program needs people to understand what it's doing, not just cheer for it abstractly. If nobody knows what the lunar module is or why it exists, they can't understand the achievement when it happens.

Gemini ends next month. Apollo begins. What comes next is the thing I've been building toward in this notebook since 1957.

I hope Dale is watching.
EOT
    ],

    [
        'date'     => '1968-07-04',
        'title'    => 'Independence Day, Space Age',
        'category' => 'Personal',
        'tags'     => 'july 4,independence day,space program,america,1968',
        'excerpt'  => 'July Fourth, 1968. The year is half over. We\'ve survived Tet, we\'ve survived King, we\'ve survived Kennedy. And the space program is still going.',
        'content'  => <<<'EOT'
July Fourth, 1968. We went to Harold and Edna's for the cookout and watched the fireworks from their backyard, and I kept thinking about what it means to be American right now.

The year is half over. We've survived Tet, we've survived King, we've survived Kennedy — Bobby Kennedy, I mean, though we had to survive Dallas Kennedy too, five years ago. The war is still going. The cities are quieter but not healed. The Democratic primary is a chaos of grief and anger and competing visions of what the country should be.

And somewhere in Houston, a team of engineers and astronauts and flight controllers is building the systems that will take people to the Moon in December and possibly land them there next summer.

I've been thinking about what space means as a national project. The easy version is: space is what America does instead of solving problems on Earth, a distraction, a prestige project that benefits engineers and aerospace companies while other priorities go unmet.

I don't think that's right, but I don't think it's entirely wrong either.

What I think: the space program is evidence that the country is still capable of doing extraordinary things, even in bad years. It doesn't solve poverty or end the war or bring King back. But it demonstrates that the institutional machinery of American science and engineering and public investment can function — can actually function — at the highest level of human capability.

That's not nothing. In a year when a lot of American institutions seem to be failing or fracturing, the space program is quietly, methodically, successfully doing something impossible.

The fireworks tonight were over Harold's house in a suburban Ohio evening. The Fourth of July, the founding declaration, the promise of what this country is supposed to be.

We're going to the Moon. Not because it proves the promise kept, but because it's evidence that the capability still exists. That we can still do things, if we try.

Happy Fourth. We're still trying.
EOT
    ],

    [
        'date'     => '1969-07-22',
        'title'    => 'The Night After the Landing',
        'category' => 'Personal',
        'tags'     => 'apollo 11,night after,reflection,betty,harold,celebration',
        'excerpt'  => 'The night after Armstrong and Aldrin walked on the Moon. I couldn\'t sleep. I sat up until 2 AM with this notebook.',
        'content'  => <<<'EOT'
I couldn't sleep last night.

Harold and Edna stayed until almost midnight. Betty finally fell asleep on the couch. I turned off the television after the second re-broadcast of the moonwalk footage and sat in the kitchen with this notebook until 2 AM.

I kept thinking about the specific texture of the moment. The grainy television image, the voice coming through the speaker, the careful steps. Armstrong described the surface as "fine and powdery" and said his boots left prints about an eighth of an inch deep. Aldrin called it "magnificent desolation." These are the first words from the first people to visit another world, and they sound like what they are: careful observations, field notes, the first entry in the log of a world that had never been visited before.

I've been keeping this notebook for twelve years. Sputnik in 1957. I was 32 years old. I went outside in my bathrobe to look at the sky.

I'm 44 now. Betty and I never did have children, which is something we stopped discussing years ago and which is fine, mostly, though I notice it at moments like this — moments when I think about what I'd tell them. What I'd want them to know about watching all of this happen.

I'd say: pay attention to the things that seem impossible. Not to be discouraged by them, but because the impossible things are where the interesting work is happening. Somebody thought that putting a satellite in orbit was impossible in 1950. Somebody thought that a man in space was impossible in 1955. Somebody thought the Moon was impossible when Kennedy said it in 1961. And then, one piece at a time, people figured out how to do the impossible things, and now two men are on the Moon.

The impossible things are the things worth watching.

It's 2 AM and I'm going to try to sleep. The astronauts are sleeping on the lunar surface — they were supposed to rest before the EVA but I don't know how they managed it, knowing where they were.

Maybe the same way I can't manage it now. Too aware of being in a place no one has ever been.
EOT
    ],

    [
        'date'     => '1971-09-01',
        'title'    => 'Driving on the Moon',
        'category' => 'Technology',
        'tags'     => 'lunar roving vehicle,rover,apollo 15,boeing,moon buggy,electric vehicle',
        'excerpt'  => 'The Lunar Roving Vehicle that Dave Scott and Jim Irwin drove on the Moon weighs 462 pounds and travels at a maximum 11 mph. It was designed, built, and tested in 17 months.',
        'content'  => <<<'EOT'
The Lunar Roving Vehicle that Dave Scott and Jim Irwin drove on the Moon weighs 462 pounds and folds to fit in the descent stage of the lunar module. It was designed, built, and delivered to NASA in 17 months. This is remarkable.

Boeing built it. The requirements were ferocious: operate in one-sixth gravity, on unknown terrain, with temperature swings from -280°F in shadow to +260°F in sun, on batteries that couldn't be recharged, carrying two suited astronauts totaling 800+ pounds Earth-weight (130+ pounds lunar weight), with a top speed of about 11 miles per hour on flat ground.

The tires are not rubber. They're wire mesh — an open lattice of zinc-coated piano wire, wrapped around a titanium hub. Rubber would crack in the lunar thermal environment and become brittle in the cold. The wire mesh tires deform over rocks (acting as springs) and then spring back. They don't go flat because they're not inflated. They leave distinctive tracks in the regolith that can still be seen in orbital photographs.

The four motors are in the wheel hubs, not connected by a drivetrain. Each wheel drives independently. If a motor fails, the other three continue. The steering is independent fore and aft: both front and rear wheels steer. The turning radius is surprisingly small for a vehicle its size.

The communication system is the most important element. The rover carries a high-gain antenna that can be pointed at Earth, enabling the high-quality television camera on the rover to transmit real-time color video to Earth. This is why the Apollo 15-17 surface coverage looks so much better than the earlier missions — better cameras, and the ability to drive the camera to interesting geological sites.

The rover was designed with a total distance limit: it could never be further from the lunar module than the astronauts could walk back if the rover broke down, given their remaining oxygen supply. This is the "walkback constraint," and it defined the operational range. Scott and Irwin covered about 17.5 miles total across three EVAs on Apollo 15.

17.5 miles. On the Moon. Driving.

I've been noting since the beginning that the Apollo program required solving problems nobody had solved before. Wire-mesh tires for a zero-atmosphere, extreme-temperature environment might be the most interesting specific solution I've come across.
EOT
    ],

    [
        'date'     => '1972-05-03',
        'title'    => 'What Comes After Apollo',
        'category' => 'Personal',
        'tags'     => 'skylab,space shuttle,post-apollo,future,1972',
        'excerpt'  => 'Apollo 17 is the last lunar landing mission. Nixon has approved a space shuttle program. But what does the post-Apollo era actually look like?',
        'content'  => <<<'EOT'
Apollo 17 is the last lunar landing mission, and I've been spending some time lately thinking about what comes next.

Nixon announced his support for the Space Shuttle program in January. The shuttle is a partially reusable spacecraft: the orbiter (the winged vehicle) flies to orbit and returns to land on a runway, like an airplane. The large external fuel tank is expendable, but the solid rocket boosters parachute down and are recovered. The concept is to reduce the cost of access to space by reusing the most expensive components.

Skylab is coming before the shuttle — a space station, built from the third stage of a Saturn V rocket, to be launched unmanned and then occupied by three successive crews. The Skylab missions will study long-duration spaceflight (up to 84 days), solar physics, and Earth observation. Skylab launches in 1973.

Beyond Skylab and the Shuttle: I don't know. The Mars mission that was being discussed in 1969 as a natural next step after the Moon seems to have evaporated. Nixon's administration has no appetite for that level of investment. The space program is contracting, and it will continue to contract.

This is disappointing. But I try to be fair about it. The Apollo program cost about $25 billion ($150 billion in today's dollars), employed 400,000 people, and consumed about 4% of the federal budget at its peak. That's not sustainable indefinitely. Other things need money too.

The question for the long term: is the Space Shuttle going to be what it's advertised to be? The promoters are selling it as a system that will reduce the cost of putting a pound in orbit from $1,000 to $100, fly 50 times a year, and make space routine. I'm skeptical that any flying machine as complex as the shuttle can be as reliable and inexpensive as an airliner. The complexity is too high.

But I've been wrong before about what this program can do. Maybe they'll pull it off.

One more landing. Then a new era.
EOT
    ],

    [
        'date'     => '1973-02-15',
        'title'    => 'Skylab Is Coming',
        'category' => 'Science',
        'tags'     => 'skylab,space station,solar physics,long duration,1973',
        'excerpt'  => 'The Skylab space station launches in May and the first crew follows in June. After Apollo, this is what\'s next for American human spaceflight.',
        'content'  => <<<'EOT'
The Skylab space station launches in May and the first crew follows shortly after. After Apollo, this is what comes next for American human spaceflight.

Skylab was built inside the third stage of a Saturn V rocket — the S-IVB stage, which normally would fire to send Apollo toward the Moon. Instead, it's been converted into a habitat: solar telescopes, living quarters, a workshop, an airlock for spacewalks. It's the largest American spacecraft by volume ever launched.

The scientific program is extensive. Solar physics is the centerpiece: Skylab carries the Apollo Telescope Mount, a set of eight solar telescopes designed to observe the Sun in ultraviolet and X-ray wavelengths that the Earth's atmosphere blocks. Ground-based solar astronomy is limited to visible light; Skylab will see the Sun in wavelengths that reveal the corona, solar flares, and the structure of the solar atmosphere in ways never possible before.

Earth resources: cameras and sensors to photograph the Earth's surface systematically. Geology, agriculture, ocean conditions, atmosphere. The Apollo missions took photographs of the Earth from the Moon and changed how we think about our planet; Skylab will do systematic Earth observation from orbit.

Long-duration human spaceflight: the three Skylab crews will stay 28 days, 59 days, and 84 days respectively (if the mission planning holds). Eighty-four days is more than three times longer than the longest previous American spaceflight. The medical data will be critical for planning any future Mars mission.

The crew is different from the Apollo pilots: Skylab has scientist-astronauts. Geologist Jack Schmitt walked on the Moon on Apollo 17. Astronomer-physician Joe Kerwin flies on Skylab 2. Scientists, not just test pilots. This is the program maturing from demonstration into operation.

I've been following this program since Sputnik and I'm going to follow Skylab too. The Moon program is ending. The space station program is beginning. The physics continues.

Forward.
EOT
    ],

    [
        'date'     => '1973-05-28',
        'title'    => 'Skylab Saved — A Repair No One Planned For',
        'category' => 'Apollo Program',
        'tags'     => 'skylab,repair,parasol,micrometeorite shield,improvisation,mission control',
        'excerpt'  => 'Skylab launched on May 14 and immediately began falling apart. The first crew delayed their launch to plan a repair. They fixed it.',
        'content'  => <<<'EOT'
Skylab launched on May 14 and immediately began falling apart.

The meteoroid shield — a thermal protection and micrometeorite deflector that wrapped around the outside of the workshop — tore off during launch. The debris took one of the two solar panel wings with it. The remaining solar panel was also jammed partially deployed.

Without the thermal shield, internal temperatures in the workshop climbed past 125°F. Without both solar panels, the power budget was catastrophically reduced. The first crew — Pete Conrad, Joe Kerwin, Paul Weitz — had their launch delayed for 10 days while engineers on the ground designed emergency repairs.

Two repairs were needed: a thermal shield to cool the interior, and releasing the jammed solar panel.

The thermal shield was improvised from materials on hand. Engineers designed a "parasol" — a multi-layer deployable shade made from nylon, mylar, and aluminized mylar — that could be pushed through a scientific airlock and deployed over the exterior of the workshop. They had ten days to design, build, and test it, and train the crew on deployment. They did it.

The solar panel fix required a spacewalk: Conrad and Kerwin cut a jammed strap with bolt cutters on the end of an EVA pole, and the wing deployed.

The crew moved into the repaired station in a habitat that was still warm but livable. They stayed 28 days, conducted all their planned scientific observations, and came home.

I keep noting these stories because they keep being the same story: things go wrong, human intelligence improvises, mission continues. This is the redundancy I've been writing about for sixteen years. Not just the physical redundancy of backup systems, but the human redundancy of problem-solving capability — the ability to respond to the unanticipated.

The parasol people never planned for a parasol. They built it in ten days with the right materials because they understood the problem clearly enough to find a solution that didn't exist yet.

That's engineering. That's the whole program, in miniature.
EOT
    ],

    [
        'date'     => '1973-07-28',
        'title'    => 'Sixty Days in Space — Skylab 3',
        'category' => 'Science',
        'tags'     => 'skylab 3,long duration,bean,garriott,lousma,solar observations',
        'excerpt'  => 'Al Bean, Owen Garriott, and Jack Lousma have been in space for thirty days now on Skylab 3, with thirty more to go. What are they actually doing up there?',
        'content'  => <<<'EOT'
Al Bean, Owen Garriott, and Jack Lousma have been in space for thirty days now on Skylab 3, with thirty more to go.

Al Bean walked on the Moon on Apollo 12. He's the only Skylab crewmember who's also walked on the Moon. I've been following Bean since Conrad's Gemini missions; he seems like a quiet, thoughtful man who will describe the Moon in terms that go beyond the technical.

What are they doing up there? The solar observations are the centerpiece. The Apollo Telescope Mount has eight telescopes observing the Sun in ultraviolet and X-ray, and every day the crew points them at solar phenomena: active regions, flares, prominences, the corona. The amount of data they're accumulating about the Sun is unprecedented. It will take years to fully analyze.

Garriott is a physicist, not a test pilot by background. He's one of the scientist-astronauts who've been training since 1965, waiting for a mission that would use their scientific skills. His presence represents a shift in the program: we're not just exploring whether people can go to space, we're using the fact that people are in space to do science that couldn't be done otherwise.

The Earth photography has been striking too. Systematic photography of the same regions over time is showing changes: erosion patterns, vegetation growth, ocean temperature distributions. Geologists are requesting specific targets. Agronomists want crop status photographs. The atmospheric scientists want cloud pattern data. Skylab is the beginning of Earth observation as a systematic science program rather than incidental photography.

The medical data is accumulating. Bone density, cardiovascular function, vestibular adaptation, muscle mass, fluid shifts. All measured regularly on a human population spending two months in weightlessness. When the first Mars crew eventually goes, they'll have this data to design their exercise protocols.

Sixty days in space. Forty years ago, nobody could have imagined it. Now it's a scheduled thing.
EOT
    ],

    [
        'date'     => '1971-12-11',
        'title'    => 'The Men Who Walked on the Moon',
        'category' => 'Personal',
        'tags'     => 'moonwalkers,all twelve,armstrong,aldrin,bean,scott,irwin,shepard,mitchell,cernan,schmitt,young,duke',
        'excerpt'  => 'Before Apollo 17 launches, I want to write down all twelve men who have walked on the Moon so far. We may not add to this list for a long time.',
        'content'  => <<<'EOT'
Before Apollo 17 launches, I want to write down all the men who have walked on the Moon, while the list is still incomplete. When it's complete, whenever that is, I want to have this record.

Neil Armstrong — Apollo 11, Sea of Tranquility, July 20, 1969. First. Twenty minutes, 12 seconds of moonwalk. The most photographed man in the history of the planet, though most photographs of him on the Moon are actually photographs of Buzz Aldrin. Armstrong was holding the camera.

Buzz Aldrin — Apollo 11, Sea of Tranquility, July 20, 1969. Second. Described the Moon as "magnificent desolation." Brought a small wine cup and host wafer and quietly took communion on the surface, which he's discussed in interviews since.

Pete Conrad — Apollo 12, Ocean of Storms, November 19, 1969. Third. Reportedly shorter than the height requirement for Mercury, talked his way into the program anyway. Said something irreverent on his first step that I won't repeat here exactly but that made me laugh. The opposite of Armstrong in temperament but equally excellent as an astronaut.

Alan Bean — Apollo 12, Ocean of Storms, November 19, 1969. Fourth. On his first spaceflight. Now paints the Moon from memory — he's become a painter since his astronaut career ended, and his paintings of the lunar surface are unique documents because he was there.

Alan Shepard — Apollo 14, Fra Mauro, February 5, 1971. Fifth. First American in space, ten years before becoming the fifth man to walk on the Moon. Hit golf balls. Enough said.

Edgar Mitchell — Apollo 14, Fra Mauro, February 5, 1971. Sixth. On the return flight, reported having a profound experience of universal interconnectedness that changed his subsequent philosophical interests. A complicated, thoughtful man.

Dave Scott — Apollo 15, Hadley-Apennine, July 31, 1971. Seventh. Dropped a feather and a hammer simultaneously on the Moon's surface to demonstrate Galileo's principle that all objects fall at the same rate in vacuum. Did it as a planned demonstration, on television. Perfect.

James Irwin — Apollo 15, Hadley-Apennine, July 31, 1971. Eighth. Said the lunar experience made him feel the presence of God. Became a Christian evangelist after his astronaut career. Died in 1991 from a heart attack.

As I write this, Apollo 16 has walked Young and Duke on the Descartes Highlands, making ten. Apollo 17 will add two more, to twelve. And then, for now, the list closes.

Twelve men, from 1969 to 1972, walked on the Moon.

I wonder how long it will be before the list grows again.
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

    $cat_id = get_category_id_9( $p['category'] );

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

echo "\n=== Import 9 complete: {$created} created, {$skipped} skipped ===\n";
