<?php
/**
 * Apollo Blog Import - File 8
 * Posts: Gemini 9-11, Apollo 11 aftermath, lunar science, cultural posts 1969
 * Run via: ddev wp eval 'require "/var/www/html/import/import-8.php";'
 */

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname(__FILE__) . '/../' );
    require dirname(__FILE__) . '/../wp-load.php';
}

function get_category_id_8( $name ) {
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
        'date'     => '1966-06-06',
        'title'    => 'Gemini 9 — Cernan\'s Difficult Walk',
        'category' => 'Gemini Program',
        'tags'     => 'gemini 9,cernan,stafford,eva,spacewalk,difficulty,augmented target docking adapter',
        'excerpt'  => 'Gene Cernan tried to do a two-hour spacewalk on Gemini 9 today and had to cut it short after 2 hours and 9 minutes. He was in serious trouble.',
        'content'  => <<<'EOT'
Gene Cernan tried to do a two-hour spacewalk on Gemini 9 today and had to cut it short after two hours and nine minutes. He was in serious trouble.

The mission had already been strange before the EVA. Gemini 9 was supposed to dock with an Agena target vehicle, but the Agena malfunctioned and didn't reach orbit. They launched a replacement target (the Augmented Target Docking Adapter), but when they got to it, the shroud that was supposed to have been jettisoned was still partially attached — open, like a crocodile mouth, as Stafford described it. Docking would have been like "docking with an angry alligator." They couldn't do it.

So they moved to the EVA objective. Cernan was supposed to work his way to the back of the Gemini capsule, strap on a jet-propelled backpack called the AMU (Astronaut Maneuvering Unit), and demonstrate independent maneuvering in space. This was a critical test for future spacewalks.

The problem: the work of just moving along the outside of the spacecraft caused Cernan's metabolic rate to skyrocket, which fogged his visor. The spacesuit's cooling couldn't keep up. He couldn't see. His heart rate was over 180 beats per minute. He never reached the AMU. He had to come back in.

This mission, and Gemini 9 specifically, is why NASA brought in Buzz Aldrin to study underwater EVA training. Aldrin had been doing research on rendezvous and orbital mechanics; he also started designing the neutral-buoyancy training approach that proved critical. His Gemini 12 EVA success didn't happen in a vacuum — it happened because Gemini 9 showed what wasn't working.

Cernan was a strong, capable man who nearly overheated on a spacewalk because nobody understood yet how much muscular exertion in a pressurized suit cost in metabolic terms. The suit's environmental system was overwhelmed.

These problems are why you test. You find out what doesn't work. You fix it. Cernan went on to command Apollo 17, the last lunar landing. He walked on the Moon for three days and came back fine.

But in June 1966, he was fighting fog on his visor and trying to breathe.
EOT
    ],

    [
        'date'     => '1966-07-19',
        'title'    => 'Gemini 10 — Young and Collins Hit Two Targets',
        'category' => 'Gemini Program',
        'tags'     => 'gemini 10,john young,mike collins,dual rendezvous,agena,docking',
        'excerpt'  => 'John Young and Mike Collins completed the most operationally complex Gemini mission yet, docking with two different Agena target vehicles.',
        'content'  => <<<'EOT'
John Young and Mike Collins completed the most operationally complex Gemini mission yet.

They docked with their own Agena target vehicle — the Agena 10 — and then used the Agena's engine to boost themselves to a higher orbit where the dead Agena 8 (the one that caused the Armstrong spin emergency) was still drifting. They rendezvoused with Agena 8. Collins did an EVA to retrieve a micrometeorite detector package from the old Agena.

Two different Agena target vehicles. One mission. Three hundred miles above the Earth.

The operational complexity is staggering when you lay it out: launch, rendezvous and dock with Agena 10, use Agena 10's engine to change orbit (a maneuver usually reserved for spacecraft, not target vehicles), find and rendezvous with Agena 8 in a completely different orbit, Collins to go out and retrieve an experiment pack from an uncooperative floating object, return and splash down. All in three days.

Collins's EVA was partly successful. He got to Agena 8 and retrieved the micrometeorite package. But he had similar problems to Cernan — the work was more exhausting than expected, his movement was less controlled than he wanted, and there were visibility issues. He didn't complete all his EVA objectives.

Still: a dual rendezvous, an uncooperative target approached and handled, a science package retrieved. Young was the commander and flew the mission with his characteristic competence — Young is one of the least famous astronauts and one of the most capable. He'll go on to Apollo 10, and to Apollo 16 walking on the Moon, and decades later to fly the Space Shuttle.

One mission at a time. Each one teaching the next.
EOT
    ],

    [
        'date'     => '1966-09-14',
        'title'    => 'Gemini 11 — Highest Orbit',
        'category' => 'Gemini Program',
        'tags'     => 'gemini 11,pete conrad,richard gordon,high orbit,tethered flight,agena',
        'excerpt'  => 'Pete Conrad and Dick Gordon flew Gemini 11 to 853 miles altitude — the highest any American has ever been, except for the Apollo 8 crew going to the Moon. They could see the curve of the Earth clearly.',
        'content'  => <<<'EOT'
Pete Conrad and Dick Gordon flew Gemini 11 to 853 miles altitude — the highest any American had ever been, at the time.

They did it by docking with the Agena target vehicle and using the Agena's engine to boost their orbit dramatically. From 853 miles, they could see the entire disk of the Earth and the curvature clearly — the planet as a ball, not just a horizon. Conrad described looking down at Australia and seeing the whole continent.

Gordon did two EVAs, one of which involved tying a tether between Gemini 11 and the Agena — a 100-foot tether. Then Conrad fired small thrusters to spin the combined system slowly, attempting to create artificial gravity through centrifugal force. The tether bowed outward as expected and there was a slight gravity-like effect, though not as stable or useful as hoped. The tether experiment was exploratory; nobody expected it to be a practical solution for artificial gravity.

Gordon had a hard time on his first EVA — similar to Cernan and Collins, he exhausted himself working outside the capsule. He was soaked with sweat, his heart rate was too high, and he had to cut the EVA short. His second EVA was a stand-up EVA (hatching open, standing in the capsule, not fully going outside) and went better because the workload was lower.

The pattern is clear now. Every Gemini EVA except Aldrin's on Gemini 12 has had problems with overexertion and suit performance. Aldrin's neutral-buoyancy training approach is the fix. But it took until the last Gemini mission to prove it conclusively.

The 853-mile altitude record is a curiosity. Not particularly useful for the Moon program, but a demonstration of what you can do with an Agena in the same orbit. Conrad and Gordon will be back: Conrad commands Apollo 12. Gordon flies with him as the CMP.
EOT
    ],

    [
        'date'     => '1969-08-01',
        'title'    => 'The Lunar Rocks Arrive',
        'category' => 'Science',
        'tags'     => 'lunar samples,moon rocks,geology,msc,quarantine,analysis',
        'excerpt'  => 'The Apollo 11 moon rocks are in the Lunar Receiving Laboratory at the Manned Spacecraft Center in Houston. Scientists are beginning to analyze them.',
        'content'  => <<<'EOT'
The Apollo 11 moon rocks are in the Lunar Receiving Laboratory at the Manned Spacecraft Center in Houston, and scientists are beginning to analyze them.

47.51 pounds. That's the total weight of the samples Armstrong and Aldrin collected: basalt from the maria surface, fine-grained regolith, core tube samples from several inches below the surface. Some individual rocks, some bulk soil. Packed in vacuum-sealed sample return containers.

The quarantine protocols are strict. The rocks, the astronauts, and the equipment are all in biological containment. Scientists working with the samples wear biohazard suits. The reasoning: we don't know for certain that the Moon is sterile. The probability of any biological contamination is extremely low — the Moon has no atmosphere, no liquid water, extreme temperature variation, and intense radiation. Every indication is that it cannot support life. But "extremely low probability" is not "zero probability," and "zero probability" is what you need before you decide it's acceptable to potentially expose the Earth's biosphere to extraterrestrial material.

After the quarantine period (21 days from last potential contamination), assuming no biological signs, the samples will be distributed to laboratories around the world for analysis.

What are they hoping to find? The age of the Moon rocks, primarily. Uranium-lead dating can tell us exactly when the basalt crystallized from lava. The samples will tell us when the Sea of Tranquility lava flows occurred, how hot the lava was, what the Moon's mantle composition is.

There's also the question of water ice, though it's unlikely to be found in surface samples. The really promising location for lunar water is the permanently shadowed craters near the poles, which Apollo can't easily reach.

I read that preliminary analysis shows the basalt is similar to Earth basalt in some ways but different in others — lower water content (essentially zero), different trace element ratios. The regolith is saturated with tiny glass beads formed by meteorite impacts, each one a tiny sphere of melted and re-solidified rock.

Those glass beads. Each one represents a tiny explosion, a meteorite hitting the Moon and vaporizing rock and regolith and launching molten droplets that cooled into spheres as they flew. Billions of years of small and large impacts, each one adding to the regolith layer.

The Moon's surface is the most thoroughly bombarded solid body in the inner solar system that we can study directly. It's the record of the first billion years of solar system history, largely erased from Earth by erosion and plate tectonics. In those 47 pounds of rock, history that we cannot read anywhere else.

I am very glad those rocks are in Houston. I hope the scientists get years to work with them.
EOT
    ],

    [
        'date'     => '1969-08-13',
        'title'    => 'The World Tour — Armstrong, Aldrin, Collins',
        'category' => 'Apollo 11',
        'tags'     => 'apollo 11,world tour,giant step,armstrong,aldrin,collins,international',
        'excerpt'  => 'Armstrong, Aldrin, and Collins finished their 21-day quarantine and are now doing a world tour that\'s being called "Giant Step." I\'ve been following it in the newspapers.',
        'content'  => <<<'EOT'
Armstrong, Aldrin, and Collins have been out of quarantine since the end of July, and they're now doing a world tour called "Giant Step" — visiting 22 countries in 38 days.

I've been following it in the newspapers, and what strikes me most is how universal the reaction seems to be. This wasn't just America's achievement in the eyes of the rest of the world. When crowds gather in London and Mexico City and Tokyo and Bombay and Lagos, they're not congratulating America the way you'd congratulate a rival who won a game. They're celebrating something they feel part of.

Armstrong has apparently said, when crowds cheered "We made it" instead of "You made it," that it felt right. The first Moon landing belongs to humanity, not just to the United States. The astronauts are American but the achievement is a human one. We went, collectively, as a species that had looked at the Moon for a million years and finally touched it.

Aldrin has been more emotional in the tour than he was in the public coverage of the mission itself. He cried at a reception in Amsterdam. He's been talking about the beauty of the Moon's desolation in terms that go beyond the engineering. The experience seems to have affected him deeply in ways that the technical debriefings don't fully capture.

Collins is, by all accounts, the most comfortable of the three in the public role. He's witty, self-deprecating about his status as the one who didn't land, warm with crowds. He told a press conference that he wasn't as lonely orbiting the Moon alone as people assume — he said he had the whole Earth to talk to, even when the radios were quiet.

The three of them together on this tour are a unit in a way that most people don't expect from test pilots, who are often described as emotionally reserved. They went through something together that nobody else in history has experienced. That creates a bond that press tours and state dinners can't dissolve.

I'm glad the world is getting to see them. I hope the world understands what they represent: not American superiority, but human capability. We can do hard things if we commit to them.

We can go to the Moon and come back.
EOT
    ],

    [
        'date'     => '1969-09-10',
        'title'    => 'What Does It Mean That We Went?',
        'category' => 'Personal',
        'tags'     => 'reflection,meaning,moon landing,philosophy,humanity,achievement',
        'excerpt'  => 'Two months since the landing and I\'m still trying to figure out what it means. Not what happened — I know what happened. What it means.',
        'content'  => <<<'EOT'
Two months since the landing and I'm still trying to figure out what it means.

Not what happened — I know what happened. Neil Armstrong and Buzz Aldrin landed on the Moon and walked around for two and a half hours and came home. I know the engineering. I know the politics. I know the Cold War context and the Kennedy speech and the Grissom fire and the twelve years of watching.

What I'm trying to figure out is what it means for us. For people. For the thing that we are as a species.

Here's the version that satisfies me most: the Moon landing is evidence that human beings can decide to do an impossible thing and then do it. Not just the Moon specifically — any impossible thing. The impossibility of going to the Moon was technical, not fundamental. It required solving problems nobody had solved before, building tools nobody had built before, training people to do things nobody had done before. It required enormous investment and political will and the labor of hundreds of thousands of people over a decade. But it was doable. And we did it.

The lesson isn't "now we can go to the Moon." The lesson is "there are things that look impossible from the outside and are merely very hard from the inside, and the difference between the two is whether you decide to commit."

I think about the engineers who worked on the guidance computer — they were writing software for a machine that had barely been invented, to perform calculations in real time that nobody had done before. They couldn't know if it would work until it worked. They had to build the understanding as they built the machine. And it worked, because they were smart enough and they worked hard enough and they had enough time (barely).

The problems this country — this world — needs to solve: air and water quality, poverty, the diseases that still kill millions, the political arrangements that still let a few people impose misery on many. None of these are as technically hard as going to the Moon. They're harder in other ways — they require moral and political will in ways the Moon required engineering and scientific will. But they're not impossible. They're merely very hard.

I'm not naive enough to say "if we can go to the Moon, we can end poverty." The mapping isn't that direct. But I do believe that the Moon landing demonstrates something about what's achievable when human beings commit clearly to something difficult and keep that commitment.

We committed. We went. We came back.

What else do we want to do?
EOT
    ],

    [
        'date'     => '1969-10-20',
        'title'    => 'The Television Camera on the Moon',
        'category' => 'Technology',
        'tags'     => 'lunar television,slow scan,westinghouse,apollo 11,tv camera',
        'excerpt'  => 'I\'ve been thinking about the camera. The one that showed us Armstrong\'s first step. How did they get a picture from the Moon?',
        'content'  => <<<'EOT'
I've been thinking about the camera. The one that showed us Armstrong's first step. How did they get a picture from the Moon?

The Westinghouse slow-scan television camera was attached to the descent stage of the Eagle lunar module, pointed at the ladder. When Armstrong opened the hatch and prepared to descend, Mission Control activated the camera. The signal traveled 240,000 miles to the 85-foot dish antennas at three receiving stations: Goldstone in California, Honeysuckle Creek in Australia, and Parkes Observatory also in Australia.

Parkes wasn't the primary station for the EVA; Honeysuckle Creek was. But early in the EVA, the Parkes signal was stronger and the video clearer, so the signal was switched to Parkes. The famous ghostly images of Armstrong coming down the ladder were received primarily at Parkes.

The camera operated at 10 frames per second rather than the American television standard of 30. This was necessary to fit the video signal within the available radio bandwidth from the Moon — you can't transmit 30-frame video over a long-range radio link without enormous bandwidth. The 10-frame signal was then processed and upconverted to 30 frames for broadcast.

The result was the grainy, slightly jerky, high-contrast images that went out on every television in the world. The technical limitations of the system are actually part of the memory — the otherworldly appearance of the footage, the ghostly white figure descending a ladder in a black sky, is partly the artifact of slow-scan television and long-range radio transmission.

There are people who point to the poor image quality as evidence that the whole thing was faked. I don't have patience for this argument except to note that the image quality is exactly what the engineering of the transmission system would predict, and is consistent with the reception challenges.

At Parkes, the operators had to handle a local crisis during the EVA: winds reached 100 kilometers per hour, which was beyond the antenna's rated limit, and the dish was at risk of being damaged. They kept it running anyway, accepting the risk. The images stayed on.

Nobody got credit for that decision. The Parkes operators kept the dish aimed at the Moon in unsafe wind conditions because they knew what was riding on it. 600 million people saw Armstrong step onto the Moon because some engineers in Australia decided to accept a risk.

There are hundreds of stories like that from the whole program. People who held things together in the moments when they needed to be held.
EOT
    ],

    [
        'date'     => '1969-11-14',
        'title'    => 'Before Pete Conrad Lands — A Note',
        'category' => 'Personal',
        'tags'     => 'apollo 12,pete conrad,bean,gordon,anticipation,second landing',
        'excerpt'  => 'Apollo 12 launches today with Pete Conrad, Al Bean, and Dick Gordon. We\'re going back to the Moon. That still sounds unbelievable.',
        'content'  => <<<'EOT'
Apollo 12 launches today with Pete Conrad, Al Bean, and Dick Gordon. We're going back to the Moon. That still sounds unbelievable.

We're going back. A second time. As if this is something we do now, as a civilization — go to the Moon, come back, go again.

It's not routine. I want to be clear about that. Nothing about Apollo 12 is routine. The Saturn V, which I wrote about in terms that make it sound formidable (because it is), struck by lightning twice just after launch today. Twice. The electrical system went haywire, circuit breakers tripped, mission controllers and astronauts scrambled to understand what had happened.

A controller named John Aaron recognized the problem from a training exercise — the power situation looked identical to something he'd seen before on a test — and told the crew to throw an obscure switch called "SCE to AUX." Conrad, who didn't know that switch, asked the crew. Alan Bean remembered it and threw it. The systems recovered.

They continued to orbit and to the Moon. The lightning strike doesn't appear to have damaged anything critical.

I've been following Pete Conrad since Gemini 5. He's shorter than most of the astronauts, louder, funnier — where Armstrong is careful and precise and economical, Conrad is expansive and enthusiastic. He reportedly made a bet with a journalist that he could say anything on the Moon and it would be reported reverentially. His plan was to say something irreverent on the first step. I've been told he's prepared for it.

Al Bean is on his first spaceflight. He's been training for years and is reportedly one of the most technically skilled people in the program, but this is his first time in space.

They're heading for the Ocean of Storms — farther from the equator than Tranquility, more technically challenging landing site. And they're aiming to land precisely enough to visit Surveyor 3, the unmanned spacecraft that landed there in 1967. If they can do that — land within walking distance of a spacecraft they targeted from the ground — it proves the precision landing capability that future missions will need.

Go, Pete. Say whatever you have planned. Bring the country along with you.
EOT
    ],

    [
        'date'     => '1969-12-15',
        'title'    => 'What the Second Landing Proved',
        'category' => 'Science',
        'tags'     => 'apollo 12,precision landing,surveyor 3,ocean of storms,pete conrad',
        'excerpt'  => 'Apollo 12 proved something beyond the fact that we can go to the Moon: we can aim.',
        'content'  => <<<'EOT'
Apollo 12 proved something beyond the fact that we can go to the Moon: we can aim.

Pete Conrad landed the Intrepid within 600 feet of Surveyor 3. 600 feet. They targeted a specific spacecraft on the lunar surface from Earth, flew a rocket to the Moon, descended through twelve minutes of powered flight, and set down close enough to walk to their target.

Conrad and Bean walked to Surveyor 3, examined it, cut off pieces including the television camera, which was returned to Earth for analysis. (The scientists want to know how lunar surface conditions affected the hardware over two and a half years.) The spacecraft had a thin coating of lunar dust and appeared structurally intact, though the white paint had darkened to brown — possibly from solar UV exposure.

The precision landing changes what's possible. The first landing (Apollo 11) had to be general-area targeting. Armstrong manually flew the last hundred feet to avoid a boulder field, which is exactly what manual override is for, but which moved them from the planned spot. Apollo 12's landing showed that when the terrain cooperates, you can hit your target.

Future missions will be able to land in the Highland terrain, which is scientifically more interesting but more challenging — older rocks, rougher surface. The navigation and landing systems we've been developing can handle it.

Conrad and Bean also spent 7.5 hours on the surface across two EVAs — the longest surface stay so far — and brought back 75 pounds of samples. The samples include basalt that's older than the Tranquility samples, from deeper lava flows. The geology picture is getting richer.

I keep thinking about the piece of Surveyor 3's camera that's now in a laboratory at JPL. A camera that we sent to the Moon in 1967, that we checked up on in 1969, that we brought a piece of back. The Moon is no longer a destination. It's a place we visit.

For now. I hope.
EOT
    ],

    [
        'date'     => '1970-02-10',
        'title'    => 'The Cost of Apollo',
        'category' => 'Space Race',
        'tags'     => 'apollo budget,cost,nasa funding,priorities,political support',
        'excerpt'  => 'The Apollo program has cost roughly $25 billion so far. I\'ve been reading about the political sustainability of this, and I\'m not sure the program is as secure as I\'d like.',
        'content'  => <<<'EOT'
The Apollo program has cost roughly $25 billion so far (in 1960s dollars), and I've been reading about the political sustainability of continuing it.

The national mood has shifted since the Apollo 11 euphoria. The landing was the peak; we went to the Moon, we did what we said we'd do, the Cold War space race has been decisively won. Now the question is: what are we doing all of this for, going forward?

The justifications for the original program were partly Cold War competition, partly national prestige, partly scientific. The Cold War justification is satisfied — we won. The prestige justification is somewhat satisfied — though there's a school of thought that says we need to keep going to maintain the lead. The scientific justification is real and ongoing — each Apollo mission brings back samples and data that genuinely advances our understanding of the Moon and early solar system. But "scientific research" is harder to sell to Congress than "beating the Soviets."

Nixon's administration has been lukewarm on space since the beginning. Nixon was never the space enthusiast that Kennedy was, and the Kennedy program is not something Nixon has any particular desire to celebrate or extend. The NASA budget has already been declining as a fraction of the federal budget. The future is unclear.

I've been reading about the plans for post-Apollo: a space station in Earth orbit, a shuttle to service it, eventually a Mars mission by the 1980s. These were the plans as of a year ago; I'm not sure they're as firm now. The shuttle is probably going to happen. The space station maybe. Mars — I wouldn't bet on it in the 1980s.

There's also a domestic argument. Billions for the Moon while cities have poverty and schools need funding and the war is still consuming money and lives. The comparison is not always fair — the space program has driven technology development, created jobs, and advanced science in ways that have downstream benefits — but the comparison resonates politically. It's hard to look someone in the eye and tell them the Moon matters more than their neighborhood.

I believe the space program matters enormously. I also believe those are hard things to hold together. I don't have a clean answer.

What I know is: the program needs political protection that it doesn't currently seem to have. I hope Apollo 14, 15, 16, 17, and whatever comes after can find it.
EOT
    ],

    [
        'date'     => '1970-04-15',
        'title'    => 'Why Apollo 13 Matters Beyond Survival',
        'category' => 'Apollo Program',
        'tags'     => 'apollo 13,recovery,mission control,engineering,improvisation,lessons',
        'excerpt'  => 'The full story of what Mission Control did during Apollo 13 is becoming clear. The engineering problem-solving was extraordinary.',
        'content'  => <<<'EOT'
The full story of what Mission Control did during Apollo 13 is becoming clear, and it goes beyond the survival narrative.

The immediate headline was: the crew survived. The explosion happened, they moved to the lunar module, they came home. Miraculous, dramatic, wonderful. That's the story.

But the engineering story underneath is extraordinary in its own right. Consider what the team on the ground had to solve in four days with no ability to physically touch anything:

Power management: The command module's batteries had to be preserved for re-entry. That meant the crew living in the lunar module on its batteries, which were designed for 45 hours of LM-only operation, stretched to support three people for 87 hours. Every non-essential system had to be identified and shut down. A list of power consumers had to be compiled and prioritized and a load-shedding protocol developed on the fly.

Carbon dioxide: The lunar module's lithium hydroxide canisters were designed for two people. They were saturated with carbon dioxide much faster with three people. The command module had spare canisters — but they were round, and the LM system used square canisters. The team on the ground invented a procedure to adapt a square canister to the round system using materials the crew had on hand: cardboard from checklist covers, plastic bags, socks, a piece of the suit biomedical harness. They tested it on the ground and gave instructions by voice. The crew built it. It worked.

Trajectory correction: The normal navigation methods required power and attitude control fuel they couldn't afford. A manual burn using the Sun and Earth as reference points was designed and the crew executed it precisely.

Re-entry procedures: The normal command module power-up sequence takes days. They had to develop an emergency 15-minute power-up procedure from scratch that had never been tested.

None of this was in any checklist. The training hadn't covered all of this. The team invented the solutions under pressure, in real time, using only their knowledge of the systems and their problem-solving capability.

Jack Swigert and Fred Haise and Jim Lovell implemented what they were told, from a crippled spacecraft, for four days. They came home.

Apollo 13 is what good engineering culture looks like when everything goes wrong. The redundancy, the training, the competence, the communication, the culture that trusted the engineers in the room rather than the schedule or the politics.

It should be taught in every engineering school. Not just the happy ending, but the specific problems and the specific solutions.
EOT
    ],

    [
        'date'     => '1970-06-15',
        'title'    => 'How They Talk to Spacecraft',
        'category' => 'Technology',
        'tags'     => 'dsn,deep space network,antenna,communication,goldstone,mdscc,canberra',
        'excerpt'  => 'I\'ve been reading about the Deep Space Network — the antennas NASA uses to communicate with spacecraft at the Moon. It\'s a global system that had to be invented.',
        'content'  => <<<'EOT'
I've been reading about the Deep Space Network — the antennas NASA uses to communicate with spacecraft at the Moon and beyond. It's a global system that had to be built from scratch over the past decade, and it works in ways I've found fascinating.

The challenge: you're trying to have a two-way conversation with a spacecraft 240,000 miles away (Moon), or potentially millions of miles away (Mars, or deep space probes). The signal power at the spacecraft end is limited by how much electrical power the spacecraft can generate, which is limited by weight. The Apollo spacecraft transmitted at about 20 watts from the Moon — about the power of a bright light bulb.

That 20-watt signal, traveling 240,000 miles and spreading out in a sphere, arrives at Earth with almost no power at all — a fraction of a fraction of a watt, spread across a hemisphere. To receive it, you need very large antennas (to collect as much of that diffuse signal as possible) and very sensitive electronics.

The Deep Space Network has three primary complexes positioned around the world at roughly 120-degree intervals: Goldstone in the Mojave Desert in California, the Canberra complex in Australia, and the Madrid complex in Spain. This spacing ensures that as the Earth rotates, at least one complex always has line of sight to the Moon or to deep space probes.

The primary antennas are 85 feet (26 meters) in diameter — huge parabolic dishes that track the spacecraft as the Earth turns. For Apollo communications, these were supplemented by additional stations (Honeysuckle Creek, Parkes) to improve coverage.

The transmitters at these stations are also very powerful when sending to spacecraft — up to 400,000 watts at some sites, to push sufficient signal out to reach Mars or beyond. For the Moon, less power is needed; for deep space probes like the Pioneer spacecraft that are heading toward the outer solar system, the full power is required.

The antennas have to track the Moon (or spacecraft) in real time, continuously adjusting as the Earth rotates. The pointing accuracy required is very high — a mispointed antenna loses signal rapidly. The mechanical engineering of these large dish antennas is impressive in itself: precise azimuth and elevation drives, enough structural stiffness to hold pointing accuracy in wind, and reliable enough to operate continuously.

All of this is invisible to people watching the mission on television. You see the launch and the lunar module and the footprints. You don't see the antenna in the Australian desert rotating to track a spacecraft, receiving a 20-watt signal from 240,000 miles away, turning it into the voice of an astronaut.

But without it, we can't hear them. Without it, they can't hear us. Without it, Mission Control can't give the crew the procedures that save their lives.

The Deep Space Network kept them all alive. Nobody made a television special about it.
EOT
    ],

    [
        'date'     => '1970-08-20',
        'title'    => 'Reading the Transcript',
        'category' => 'Personal',
        'tags'     => 'transcripts,apollo communications,voice,capcoms,language',
        'excerpt'  => 'NASA has been releasing transcripts of the air-to-ground communications for Apollo missions, and I\'ve been reading them. The language is unlike anything else.',
        'content'  => <<<'EOT'
NASA has been releasing transcripts of the air-to-ground communications for Apollo missions, and I've been reading them. The language is unlike anything else I've ever read.

It's a genre of its own. Part technical report, part field dispatch, part something that doesn't have a name. The speakers are enormously competent people conducting matter-of-fact conversations about conditions no human being has ever been in before, and the combination of the technical vocabulary and the extraordinary circumstances creates a kind of deadpan poetry.

Some examples from the Apollo 11 transcripts (reconstructed from memory and notes):

During the powered descent, with the 1202 alarm sounding: "Houston, we've got a program alarm... 1202... 1202." "Roger. Go. Alarm." "Go." Just that.

Armstrong, on the surface, after picking up the first rock sample: "I got...some of the rock, soil, fine material...as you can see from this picture."

Aldrin, stepping down from the ladder: "Beautiful view." Then, a moment later: "Magnificent desolation."

Collins, reporting from lunar orbit after the landing: "I just can't believe this is happening." The voice of the man who flew to the Moon and stayed in orbit while his crewmates walked on it.

The word "nominal" appears constantly. Everything is "nominal" or "looks good" or "coming along." When something is not nominal, the description becomes specific and careful and careful and careful. You can feel the professional training pressing down on whatever emotional response the speaker has and replacing it with precision.

I've read portions of the Apollo 13 transcripts from the hours after the explosion. The voices stay measured. "We've had a problem here" — Lovell's famous report. Not "something terrible just happened," not panic. "We've had a problem." The training and the culture and the discipline that produces that measured report in that moment is worth study.

There are also private moments that leaked through. Aldrin, very quietly, reading his own communion service in the lunar module after landing, before the EVA. That wasn't on the public channel; it came out in interviews. A private thing made in the most public possible moment.

The transcripts are history. Not the polished history of the press releases but the working history — the actual words, the pauses, the "roger that," the "go," the "come on." I'm glad they're releasing them.
EOT
    ],

    [
        'date'     => '1971-02-05',
        'title'    => 'Fra Mauro — The Landing Shepard Deserved',
        'category' => 'Apollo Program',
        'tags'     => 'apollo 14,shepard,mitchell,roosa,fra mauro,first american in space,return',
        'excerpt'  => 'Alan Shepard walked on the Moon today. The first American in space, fifteen minutes and thirty-seven seconds in 1961, just hit a golf ball on the lunar surface.',
        'content'  => <<<'EOT'
Alan Shepard walked on the Moon today.

I wrote about Shepard's Mercury flight in 1961. Fifteen minutes and thirty-seven seconds. A suborbital arc. He lit the candle and he came back and the whole country held its breath for fifteen minutes. That was the beginning of all of this.

Ten years later, he's on the Moon.

Between Mercury and now: an inner ear problem called Ménière's disease that grounded him for years, the rise of his juniors, the worry that he'd never fly again. Then a surgical procedure that corrected the problem. Then the long process of recertifying for flight. Then Apollo 14.

At 47 years old, Alan Shepard landed on Fra Mauro — the hilly terrain around the Fra Mauro crater, one of the most scientifically interesting sites attempted so far. He and Ed Mitchell walked 9,000 feet across the lunar surface, collecting samples and trying to reach the rim of Cone Crater. They didn't quite make it to the rim — the terrain fooled them, the crater was farther than it seemed, and they had to turn back when they were probably only 65 feet from the rim edge. They didn't know they were that close at the time.

And then, before returning to the lunar module, Shepard pulled a golf ball out of his suit pocket. He had brought a modified sample-collection tool with a six-iron head attached. He teed up the golf ball on the lunar surface.

He swung with one hand (the suit doesn't permit a full golf swing) and said: "There it goes...miles and miles."

I laughed. I laughed out loud, alone in my kitchen listening to the broadcast, because it was the most perfectly Shepard thing in the history of the space program. The first American in space, the competitive, restless, sometimes difficult, always capable Alan Shepard, the man who told Mission Control to "fix your little problem and light this candle," was on the Moon and he brought a golf ball.

He hit two of them, actually. The second one went farther.

The science of Apollo 14 is also significant — Fra Mauro is the ejecta blanket from the Imbrium basin impact, one of the large basins that formed early in the Moon's history. The samples tell us about that ancient catastrophe. Mitchell and Shepard collected 94 pounds, including some large rock specimens.

But I'm going to remember the golf ball. Of course I am.
EOT
    ],

    [
        'date'     => '1971-05-25',
        'title'    => 'Why the Highlands Now',
        'category' => 'Science',
        'tags'     => 'lunar highlands,anorthosite,highland geology,apollo 15,science goals',
        'excerpt'  => 'The last three Apollo missions are going to the highlands — the old, heavily cratered terrain that makes up most of the lunar surface. Here\'s why that matters scientifically.',
        'content'  => <<<'EOT'
The remaining Apollo missions — 15, 16, 17 — are all going to the lunar highlands, and the scientific community is excited about this in a way that I want to explain.

The maria (the smooth dark plains where Apollo 11 and 12 landed, and the Fra Mauro region of Apollo 14) are geologically younger and compositionally different from the highlands. The maria basalts tell us about volcanism on the Moon from 3.5-3.8 billion years ago. That's important information. But the highlands are older — they're the original lunar crust, formed about 4.4 billion years ago when the global magma ocean cooled.

The rock type that makes up most of the highlands is anorthosite — a coarse-grained, pale rock rich in a mineral called anorthite (a calcium-aluminum silicate). Anorthosite forms when a magma cools slowly and the lightest minerals float to the top. When the early Moon had a global magma ocean, the anorthosite crystallized and floated to form the crust. This is the "floatation crust" model.

Nobody has yet returned an anorthosite sample. All the Apollo samples so far have been mare basalt or ejecta from basin impacts. Anorthosite from the ancient crust would allow us to date the age of the lunar crust directly — the oldest thing on the Moon, possibly the oldest accessible rock in the solar system.

There's also the question of what the bombardment history was. The highlands are covered with ancient craters, telling us about the "late heavy bombardment" period 3.9 billion years ago — when the inner solar system was pelted with debris. This same bombardment affected Earth, but Earth has no surviving record. The Moon does.

Apollo 15's landing site at Hadley-Apennine is at the edge of the Apennine mountain range — mountains that were thrown up by the Imbrium basin impact. The mountains are made of whatever was deep in the crust when the Imbrium event excavated it. This is geological stratigraphy — reading the layers. What's in those mountains is what was deep in the Moon's crust four billion years ago.

Also: for the first time, Apollo 15 will carry a rover. The Lunar Roving Vehicle. They're going to drive on the Moon.

I have to say that again: they're going to drive on the Moon. Not walk, not bounce, not shuffle through regolith. Drive.
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

    $cat_id = get_category_id_8( $p['category'] );

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

echo "\n=== Import 8 complete: {$created} created, {$skipped} skipped ===\n";
