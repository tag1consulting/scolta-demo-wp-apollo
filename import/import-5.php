<?php
/**
 * Apollo Blog Import - File 5
 * Posts: Technology deep-dives, Apollo preparation, cultural posts 1964-1967
 * Run via: ddev wp eval 'require "/var/www/html/import/import-5.php";'
 */

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname(__FILE__) . '/../' );
    require dirname(__FILE__) . '/../wp-load.php';
}

function get_category_id_5( $name ) {
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
        'date'     => '1964-06-15',
        'title'    => 'What the Saturn V Actually Is',
        'category' => 'Technology',
        'tags'     => 'saturn v,rocket,f-1 engine,von braun,launch vehicle',
        'excerpt'  => 'I\'ve been trying to understand the Saturn V rocket. The numbers are almost too large to hold in your head.',
        'content'  => <<<'EOT'
I've been trying to understand the Saturn V rocket, and the numbers are almost too large to hold in your head.

The Saturn V is being built in Huntsville, Alabama, by a team led by Wernher von Braun. It's the rocket that will carry the Apollo crew to the Moon. Let me try to describe it in terms that mean something.

Height: 363 feet. That's taller than the Statue of Liberty (305 feet including the pedestal). Taller than any building in Columbus. When it stands on the launch pad, it is the tallest object on the Florida landscape for miles in any direction. You can see it from the beach.

Weight (fully fueled): 6.2 million pounds. 3,100 tons. The fuel alone — liquid oxygen and RP-1 kerosene in the first stage, liquid oxygen and liquid hydrogen in the second and third stages — makes up about 85% of that weight. The useful payload — the crew, the capsule, the lunar lander — is roughly 100,000 pounds sitting atop 6.1 million pounds of explosive propellant.

Thrust (first stage): 7.5 million pounds of thrust, produced by five F-1 engines. Each F-1 engine burns 5,683 pounds of propellant per second. All five together burn more than 28,000 pounds per second. In the two and a half minutes the first stage burns, it consumes roughly 4.5 million pounds of fuel.

Think about that: 4.5 million pounds of fuel in two and a half minutes.

The F-1 engine itself is the largest liquid-fuel rocket engine ever built. It produces 1.5 million pounds of thrust from a single engine. The combustion chamber burns at 5,800 degrees Fahrenheit. The turbopump that feeds the propellants spins at 5,500 RPM and could power a small city.

Building this thing required solving problems nobody had solved before. The early F-1 engines had a catastrophic instability problem — the combustion in the chamber would develop acoustic resonances that would tear the engine apart in a fraction of a second. They fixed it through systematic empirical testing: blowing things up until they understood how to prevent it. Hundreds of engine tests. They couldn't calculate their way to the solution; they had to blow things up carefully and observe.

The Saturn V has three stages. First stage: five F-1 engines, burns for about 2.5 minutes, falls away at 38 miles altitude. Second stage: five J-2 engines (smaller, using liquid hydrogen instead of kerosene), burns for about 6 minutes, falls away at 115 miles altitude. Third stage: one J-2 engine, initially burns for about 2.5 minutes to reach orbit, then fires again to send the spacecraft to the Moon.

By the time the third stage has fired and the spacecraft is on its way to the Moon, 97% of the mass that left the launch pad has been jettisoned. What makes it to lunar orbit is roughly 3% of what started. This is the fundamental mathematics of rocketry: propellant is expensive, payload is precious, and the relationship between them is brutal.

I'm keeping a technical file alongside this notebook now. Clippings, magazine articles, the NASA technical reports that get declassified and show up in the engineering journals. I'll never understand the differential equations. But I want to understand the shape of the problem.

The Saturn V is a cathedral of engineering — built to be used once, to do one impossible thing, to carry three people across 240,000 miles of vacuum and bring them back. It's the largest machine ever built for a single specific purpose.

I think about it sometimes when I drive past the water tower outside of town. The Saturn V is taller than a water tower by a factor of three. And it goes to the Moon.
EOT
    ],

    [
        'date'     => '1964-09-20',
        'title'    => 'How Do You Navigate to the Moon?',
        'category' => 'Technology',
        'tags'     => 'navigation,guidance computer,trajectory,mit,translunar injection',
        'excerpt'  => 'I\'ve been trying to understand how you actually navigate a spacecraft from Earth to the Moon. It\'s not like driving — there are no roads, no landmarks, and everything is moving.',
        'content'  => <<<'EOT'
I've been trying to understand how you actually navigate a spacecraft from Earth to the Moon. It's not like driving.

There are no roads. There are no landmarks in the conventional sense. Everything is moving — the Earth is rotating and orbiting the Sun, the Moon is orbiting the Earth, the spacecraft is on a trajectory that's constantly changing under the influence of gravity from all of these bodies. How do you aim for something that's always moving, when you're also always moving, and the thing you're aiming at is 240,000 miles away?

The answer involves some physics and a lot of computing, and I've been reading about it for a week.

The fundamental principle is this: the spacecraft doesn't fly to where the Moon is. It flies to where the Moon will be. The translunar trajectory is calculated so that the spacecraft, after its translunar injection burn, will coast along a curved path that intersects the Moon's position roughly three days later. The Moon will have traveled partway around its orbit by then, and the spacecraft will meet it there. It's like throwing a ball to where a moving person will be, except the distances are incomprehensible and the physics is exact.

MIT's Instrumentation Laboratory is building the guidance computer for Apollo. It's about the size of a large toolbox — maybe two cubic feet. By current computing standards, this is remarkably compact. It uses integrated circuits (a new technology that consolidates what used to be thousands of separate transistors and wires into small chips) and runs software specifically written for navigation and guidance.

The computer has 4,096 words of erasable memory and 36,864 words of read-only memory. These numbers would mean nothing to me three years ago; they still barely mean anything to me now, but I've been told that this is extremely limited — the engineers have to write their software with extraordinary frugality because there's no room for waste.

There's also a physical navigation system: a sextant and a telescope, which the astronaut uses to sight stars and landmarks and feed the data into the computer. The computer can calculate the spacecraft's position from celestial references — the same principle that navigators on ships have used for centuries, adapted for three-dimensional space.

And there's a network of ground stations — tracking antennas around the world — that measure the spacecraft's radio signal with extreme precision, calculating its exact velocity from the Doppler shift and its exact position from the signal strength and timing. Mission Control knows where the spacecraft is. The spacecraft knows where it is. If these two disagree, someone has to figure out why.

The complexity of all this is why the Gemini program spent two years practicing rendezvous and docking. If you can reliably navigate to within a few feet of another spacecraft in Earth orbit, you have the fundamental skill for getting to the Moon. The Moon is farther, but the navigation principles are the same.

I asked Harold if he'd ever tried to calculate where a ball would land by working out the physics equations while it was in the air. He said that was obviously impossible. I said: that's what you have to do to get to the Moon, except you have three days to solve the equations and the stakes are slightly higher.

He said, "Well, that's what the computers are for."

Yes, Harold. That's what the computers are for.
EOT
    ],

    [
        'date'     => '1965-01-12',
        'title'    => 'The Spacesuit Problem',
        'category' => 'Technology',
        'tags'     => 'spacesuit,eva,pressure suit,ila,hamilton standard',
        'excerpt'  => 'People don\'t think about spacesuits much when they think about going to the Moon. They should.',
        'content'  => <<<'EOT'
People don't think about spacesuits much when they think about going to the Moon. They should.

A spacesuit is a personal spacecraft. Everything the larger vehicle does — maintain pressure, regulate temperature, filter air, protect from radiation and micrometeorites — the suit has to do too, in a package you can wear and move in. And it has to do it for hours at a time, on the surface of the Moon, in vacuum, with temperature swings from 250 degrees Fahrenheit in direct sunlight to minus 250 degrees in shadow.

I've been reading about the development problems. The early Mercury suits were modified high-altitude pressure suits from the military, designed to maintain pressure if the capsule lost pressure. They weren't designed for EVA — for actually going outside and working. The Gemini suits improved on this, but the Gemini EVA difficulties I've written about (astronauts exhausting themselves, unable to complete tasks) revealed serious problems. If a suit makes it impossible to work, it's not doing its job.

Hamilton Standard is the main contractor for the Apollo suits. ILC Industries is doing the actual suit fabrication. The suit has 21 layers: an inner pressure bladder, a restraint layer to keep the bladder from ballooning when pressurized, thermal insulation layers, and an outer layer of Teflon-coated fabric that resists abrasion and fire. The boots have layers of aluminum for thermal protection.

The gloves are the most critical and most difficult piece. An astronaut on the Moon has to pick up rock samples, operate cameras, plant flags, drive equipment. The glove has to be flexible enough to do all of this while pressurized — and pressurized gloves resist bending because air pressure wants to push the fingers straight. The solution involves putting extra fabric pleats at each knuckle, so the finger joints have slack to bend into.

I tested this concept on my own hand by rolling up a rubber glove cuff with air in it and trying to flex my fingers. It's harder than you think. And that's at Earth atmospheric pressure; the suit operates at a lower pressure specifically to make this easier, but lower pressure means the astronaut has to pre-breathe pure oxygen before EVA to purge nitrogen from the blood (otherwise reduced pressure can cause the bends, same as a diver surfacing too fast).

The helmet has a gold-coated visor that reflects infrared radiation — that's why lunar surface photographs show astronauts in reflective golden visors. The visor is the astronaut's primary protection against solar radiation, which on the Moon is unfiltered by any atmosphere.

The whole system — suit, backpack (portable life support system), gloves, helmet, boots — weighs about 200 pounds on Earth. On the Moon, with one-sixth gravity, it weighs about 33 pounds. But it's still 200 pounds of mass to carry around, and the bulk of it affects how you move.

I keep a mental list of things the Moon program requires that weren't on anyone's engineering agenda twenty years ago: guidance computers small enough to fly on a spacecraft, rocket engines with unprecedented reliability, life support systems for two weeks in space, suits that let you work on a planetary surface.

The suit people have one of the hardest jobs and get among the least credit. Without the suits, no one walks on the Moon. I hope they know how important they are.
EOT
    ],

    [
        'date'     => '1965-09-15',
        'title'    => 'Gemini 5 Follow-Up: What Eight Days Teaches You',
        'category' => 'Technology',
        'tags'     => 'gemini 5,long duration,medical,weightlessness,physiology',
        'excerpt'  => 'The medical results from the Gemini 5 eight-day mission are in and I\'ve been reading the summaries. The human body changes in microgravity. Some of it is manageable. Some of it is alarming.',
        'content'  => <<<'EOT'
The medical results from the Gemini 5 eight-day mission are in and I've been reading the summaries. The human body changes in microgravity. Some of it is manageable. Some of it is alarming.

The cardiovascular system: without gravity, blood doesn't pool in the legs. The heart has less work to do to circulate blood. The body, being efficient about things, responds by reducing blood volume — you excrete more fluid because your body thinks you have too much. When you return to gravity, you have less blood than you started with, and your heart has to work harder than before to circulate it, which manifests as orthostatic hypotension (lightheadedness when standing up) and general fatigue.

Cooper and Conrad had measurable cardiovascular deconditioning after eight days. They needed rest after landing. This means Apollo astronauts returning from the Moon will need recovery time before they can function normally. The medical team is working on exercise protocols to mitigate this — periodic bungee cord exercises, designed to load the cardiovascular system during flight.

Bones and muscles: eight days showed early signs of loss. The body doesn't maintain bone density it doesn't need. Without the constant loading of gravity, bone resorption exceeds bone formation. Eight days isn't enough time to produce dramatic loss, but the trend was measurable. Longer missions — like the eventual Skylab station or a Mars mission — will face this seriously.

Kidneys and calcium: related to the bone issue. The calcium released from bone has to go somewhere, and it goes through the kidneys. High urinary calcium over long periods can cause kidney stones. Nobody wants a kidney stone on the way to the Moon.

Inner ear adaptation: the vestibular system that senses orientation and motion adapts to weightlessness within a few days. Most astronauts experience some nausea in the first day or two as the inner ear recalibrates. The danger point is re-entry, when gravity returns suddenly and a still-adapted vestibular system can cause severe disorientation.

What does all this mean for the Moon? The Apollo mission is about eight days round trip. Not fourteen days like the Gemini maximum duration, but not trivial either. The medical team's assessment, as I understand it, is that the deconditioning at eight days is manageable — not negligible, but manageable. The crew will be somewhat weakened on return but functional.

I find myself thinking about the astronauts themselves. They train for the engineering and the piloting. They practice procedures until they can do them in the dark. They are exceptionally fit. And then they go into an environment where their body starts quietly dismantling itself, and they have to perform their professional best anyway.

The body is another system that has to work. Like the fuel cells and the guidance computer and the heat shield. The body is a system, and systems have to be engineered and maintained.

Remarkable people, doing an extraordinary thing, in a body that would prefer to be on the ground.
EOT
    ],

    [
        'date'     => '1966-01-28',
        'title'    => 'Mission Control and the People Behind the Headsets',
        'category' => 'Technology',
        'tags'     => 'mission control,flight director,gene kranz,flight controllers,houston',
        'excerpt'  => 'I\'ve been thinking about the people in Houston I never see in the photographs. The astronauts get all the press, but Mission Control is the other half of every spaceflight.',
        'content'  => <<<'EOT'
I've been thinking about the people in Houston I never see in the photographs.

The astronauts get all the press. Their names are in the headlines and their faces are on magazine covers. But Mission Control is the other half of every spaceflight, and I've been reading enough now to understand what they actually do.

Flight Director is the most important title in Mission Control. The Flight Director has ultimate authority over the mission — more authority, in some respects, than anyone on the ground, including the NASA administrator. The flight director's word is final. If something goes wrong and a decision has to be made in seconds, the flight director decides. Failure is on them. Success is theirs too.

Gene Kranz is becoming the most prominent of them. He's a former Air Force pilot, 32 years old, speaks in clipped precise sentences, and apparently wears white vests to every mission as his personal statement of professionalism. His team is known internally as "the White Team." He goes into every mission with what he calls the "tough and competent" mantra — his whole management philosophy in three words. He was flight director for Gemini 8, the one where Neil Armstrong's capsule started spinning. The mission was cut short, but both astronauts came home. Kranz and his team made the right calls in real time.

Below the flight director is a room full of flight controllers, each responsible for one system: propulsion, power, guidance, life support, trajectory, communications. They're mostly young — late 20s, early 30s. The engineers and scientists who build spacecraft in the previous decade are now in their 40s and 50s; the people running the consoles are a new generation trained specifically for this. Many of them came out of universities in the mid-1950s, motivated by Sputnik to go into aerospace engineering. They've spent their careers building toward this moment.

The communications discipline is partly what makes Mission Control work. Every controller has a specific responsibility. They don't speak up about things outside their lane. They stay in their seats until the flight director releases them. They know their systems at a level that allows them to diagnose problems from telemetry data in real time, often faster than the crew can describe what's happening.

Flight controllers aren't on the news. You don't see them in the ticker-tape parades. But when John Glenn's heat shield sensor indicated a loose heat shield, it was a flight controller who had to evaluate the data, determine whether it was likely a false alarm, and recommend a procedure that might keep Glenn alive if it wasn't. That calculation — done in minutes, under pressure, without knowing the answer — is what a flight controller does for a living.

There are also the FIDO (flight dynamics officer), who computes trajectories; the GUIDO (guidance officer), who monitors the onboard computer; and the SURGEON, who monitors the crew's medical telemetry. There's a surgeon sitting in Mission Control for every manned mission, watching heart rate and respiration and blood pressure through sensors in the suits, ready to advise.

I think about that sometimes. Somewhere in Houston, there is a doctor watching an astronaut's heart rate on a screen, three hundred miles away from the astronaut. If the astronaut's heart rate changes, the doctor will know before the astronaut does.

We take a lot of this infrastructure for granted. The cameras go to the launch pad, to the capsule interior, to the recovery ship. Very rarely to the room full of young engineers in ties and short sleeves who are watching every sensor on every system and building the scaffolding that keeps the astronauts alive.

I want to remember them too.
EOT
    ],

    [
        'date'     => '1966-06-03',
        'title'    => 'Surveyor Lands on the Moon',
        'category' => 'Technology',
        'tags'     => 'surveyor 1,unmanned landing,lunar surface,moon landing prep',
        'excerpt'  => 'The United States landed a spacecraft on the Moon today. Unmanned, but on the Moon. Softly, without crashing. The first successful American soft landing on the lunar surface.',
        'content'  => <<<'EOT'
The United States landed a spacecraft on the Moon today.

Unmanned, but on the Moon. Softly, without crashing. Surveyor 1.

I realize that sounds anticlimactic compared to putting men up there. But it shouldn't. This is technically very difficult — you're flying a spacecraft 240,000 miles, hitting the Moon with precision, decelerating from 6,000 miles per hour to zero at the exact right moment, and landing upright on a surface you've never physically examined.

Why does this matter for Apollo? Because nobody actually knew for certain what the lunar surface was like. Some scientists — a minority, but vocal — argued that the surface was covered in a deep layer of loose dust, accumulated over billions of years of meteorite impacts. If the dust was deep enough, a spacecraft would simply sink in. The first image from Surveyor 1 — showing the footpad resting on firm soil — was partly a scientific result and partly an engineering clearance.

The surface is firm enough to support a spacecraft. The dust layer, where there is one, is shallow. A person in a suit, or an Apollo landing leg, would not disappear into a bottomless powder.

This seems obvious in retrospect. Of course the Moon has a solid surface — you can see it through a telescope, you can see the mountains and craters, something solid made all those craters. But "obvious in retrospect" is different from "proven in advance," and the Apollo planners needed proof.

Surveyor 1 has now taken over 10,000 photographs of the surface around its landing site, showing rocks, dust, craters, textures. Scientists are poring over these images. What they're learning will influence the site selection for Apollo landings and the EVA planning for the surface.

The Soviets have been trying to land on the Moon since 1963 and have not managed a soft landing until just a few months ago (Luna 9, in February). We just did it on our first attempt. That's not nothing.

The race has multiple categories. Manned orbit: Soviets. Manned spaceflight first: Soviets. Spacewalk: Soviets, barely. Soft unmanned lunar landing: essentially tie. The overall score is still in Soviet favor, but the American program is technically more sophisticated now, and the endgame — landing people on the Moon — is specifically an American commitment.

The footpad sits in lunar dust, solid, undisturbed. The surface will hold us.

Good news for when the real thing comes.
EOT
    ],

    [
        'date'     => '1966-08-10',
        'title'    => 'Lunar Orbiter Maps the Moon',
        'category' => 'Technology',
        'tags'     => 'lunar orbiter,photography,landing sites,moon mapping',
        'excerpt'  => 'Lunar Orbiter 1 is photographing the Moon from orbit right now. The images coming back show the lunar surface in detail we\'ve never had before.',
        'content'  => <<<'EOT'
Lunar Orbiter 1 is photographing the Moon from orbit right now, and the images coming back show the lunar surface in detail we've never had before.

Not just crater fields and highlands in general. Individual boulders. Subtle terrain variations. The kinds of features that determine whether a particular spot is safe to land a spacecraft. This mission is specifically about finding and verifying Apollo landing sites.

The photography system is unusual. The spacecraft carries actual photographic film (Kodak), which is exposed and then developed onboard, and then a flying-spot scanner reads the developed film and transmits the image back to Earth as a radio signal. This whole process happens inside the spacecraft in the vacuum of space, which is an engineering achievement in itself. It would be simpler to use electronic imaging, but the film approach produces higher resolution than current electronic systems can achieve.

The Lunar Orbiter program plans five missions. Between them they'll photograph virtually the entire surface of the Moon from low altitude, building a comprehensive map. The Apollo landing sites have to be chosen from this survey: flat enough for a safe landing, not too far from equatorial (to save fuel on the translunar trajectory), free of large boulders, free of craters deep enough to swallow a lander.

I've been looking at the photographs they've been releasing to the press. The terrain is more rugged than I expected up close — what looks smooth from Earth shows up as cratered and rocky at 150 miles altitude. The Apollo landing planners are going to have to look carefully. The Sea of Tranquility looks promising from the orbital photos; it's one of the smooth mare (ancient lava plains) rather than the heavily cratered highlands, and relatively flat.

The Soviets have also sent lunar orbiters. The race to fully map the Moon before landing is happening simultaneously, with both programs essentially on parallel tracks. There's a certain irony in two superpowers exhaustively photographing the same dead rock from competing perspectives.

But the photographs are magnificent. The Moon is beautiful and terrifying and closer than it's ever been.

The landing sites are being selected. The missions are being planned. Everything is pointing toward a specific moment, in a specific place, on a specific date that nobody has announced yet.

Soon. It has to be soon.
EOT
    ],

    [
        'date'     => '1966-11-25',
        'title'    => 'What I\'ve Learned About Rocket Engines',
        'category' => 'Technology',
        'tags'     => 'j-2 engine,rocketdyne,liquid hydrogen,combustion,propulsion',
        'excerpt'  => 'I\'ve spent several weekends this fall reading about rocket propulsion because I wanted to understand why liquid hydrogen and liquid oxygen are used instead of, say, gasoline.',
        'content'  => <<<'EOT'
I've spent several weekends this fall reading about rocket propulsion because I wanted to understand why the Saturn V's upper stages use liquid hydrogen and liquid oxygen instead of, say, kerosene and oxygen like the first stage.

The short answer: energy density. Liquid hydrogen, when burned with liquid oxygen, releases more energy per pound of propellant than any other chemical reaction we can practically use. That matters enormously when you're trying to get somewhere with limited propellant.

The unit rocketry engineers use is "specific impulse" — essentially how many seconds of thrust you get per pound of propellant burned per second. Higher is better. The F-1 engine (kerosene/LOX) has a specific impulse of about 304 seconds. The J-2 engine (liquid hydrogen/LOX) has about 421 seconds. That 40% improvement is huge when you're talking about the upper stages that have to push the crew to the Moon.

So why not use hydrogen everywhere? The problem is volume. Hydrogen has extraordinary energy per pound but terrible energy per gallon. Liquid hydrogen is so diffuse — it has to be stored at minus 423 degrees Fahrenheit, and even as a liquid it's extremely light — that the tanks required to hold it for the first stage would be impossibly large. The first stage uses kerosene (RP-1) because the tanks stay manageable, and the raw brute-force thrust of the F-1 engines more than compensates for the lower efficiency.

The J-2 engines on the second and third stages of the Saturn V use hydrogen precisely because those stages are trying to extract maximum performance from the remaining propellant. They're not fighting gravity off the launch pad; they're in flight, optimizing efficiency.

There's also a temperature problem that took years to solve. Liquid hydrogen is the coldest liquid that exists in practice — nearly absolute zero. When it flows through pipes into a combustion chamber burning at 5,000 degrees, every seal, every valve, every weld has to survive that thermal gradient. Metals become brittle at cryogenic temperatures. The engine starts cold and then the combustion chamber gets white-hot in milliseconds. Finding materials and designs that handle this consistently, for 500 seconds of burn time, required systematic testing that destroyed a lot of hardware.

Rocketdyne built the J-2 engine, the same company that built the F-1. They're in Canoga Park, California. I've read about their test facility in the Santa Susana Mountains — they fire rocket engines on mountain test stands and the noise is apparently audible for miles. Neighbors have complained. Rocketdyne has, I'm told, explained that the noise is why we're going to the Moon before the Soviets.

The chemistry of it, stripped down: hydrogen and oxygen combine to form water. That's the exhaust. The Saturn V's upper stages are, at the molecular level, burning hydrogen and making steam. Exhaust velocities around 14,000 feet per second. The chemistry is almost embarrassingly simple. The engineering to make that chemistry happen reliably, at scale, at extreme temperatures, repeatedly, without failure — that's where all the complexity is.

I find that comforting somehow. The underlying physics is clean and tractable. The hard part is the engineering, and the engineering is something human beings figured out.
EOT
    ],

    [
        'date'     => '1967-01-15',
        'title'    => 'Grissom\'s Concerns',
        'category' => 'Apollo Program',
        'tags'     => 'grissom,apollo 1,problems,concerns,spacecraft',
        'excerpt'  => 'I\'ve been reading between the lines of what\'s being reported about Apollo 1 and I\'m worried. Gus Grissom reportedly hung a lemon on the spacecraft at some point.',
        'content'  => <<<'EOT'
I've been reading between the lines of what's being reported about Apollo 1 and I'm worried.

The Apollo 1 capsule — the first crewed Block I command module, assigned to Grissom, White, and Chaffee for the first crewed Apollo flight — has been having problems. I say "problems" loosely because the public reporting is vague, but there are enough hints in engineering publications and in the occasional candid comment from unnamed sources to suggest that the spacecraft is not in the state it should be.

Grissom reportedly hung a lemon on the spacecraft at some point, which is the kind of sardonic commentary you make when you're deeply frustrated with a system's reliability. He has reportedly told his wife Betty that if there's ever a serious accident, it would set the program back two years. He told this to his wife. That is not the voice of a man with confidence in his machine.

The Command Module is built by North American Aviation. There have been management problems there — schedule pressure, cost overruns, quality control issues. The spacecraft has something like three miles of wiring, roughly the same as a medium-sized commercial aircraft, packed into a much smaller space. The environmental control system has had problems. There are flammable materials throughout the cabin — Velcro, nylon netting, foam padding. The atmosphere inside the capsule during the upcoming test will be 100% oxygen at slightly above atmospheric pressure, which dramatically reduces combustion requirements.

Pure oxygen. Flammable materials. Poorly managed wiring. I'm not an engineer, but I can read a list of hazards.

The upcoming test is a "plugs out" test — all umbilicals disconnected, running on internal power, simulating flight conditions on the pad. It's not considered a high-risk test because there's no fuel in the rocket. The launch isn't until February. I assume the engineers know what they're doing. I assume the hundreds of people who have touched this spacecraft have been checking their work.

I hope I'm wrong to be worried. Grissom has been right about things before that nobody wanted to hear. He knows aircraft and spacecraft. If he's worried, that means something.

But I've been wrong in my worries before. The Atlas rocket that Glenn flew had had failures; Glenn went up fine. The Gemini 8 spin was terrifying from the outside; Armstrong brought them home. The hazards I've listed above are known to the engineers; they presumably have mitigations.

I'm probably being the anxious spectator again, finding danger in the shadows of incomplete information.

The flight is scheduled for February 21. I'll be watching.
EOT
    ],

    [
        'date'     => '1967-01-28',
        'title'    => 'The Worst Day',
        'category' => 'Apollo Program',
        'tags'     => 'apollo 1,grissom,white,chaffee,fire,tragedy',
        'excerpt'  => 'I wrote ten days ago that I was worried about Apollo 1. I am not going to feel any vindication about that. Three men are dead.',
        'content'  => <<<'EOT'
I wrote ten days ago that I was worried about Apollo 1. I am not going to feel any vindication about that.

Three men are dead.

Gus Grissom. Ed White. Roger Chaffee. Last night, during the plugs-out test on the launch pad at Cape Canaveral. A fire started inside the capsule at 6:31 PM. The pure oxygen atmosphere made it explode into an inferno within seconds. The capsule hatch could not be opened from the inside quickly. By the time the pad crew fought through the smoke to open it from outside, all three men were dead. It took five minutes to get the hatch open. Five minutes.

I heard the news this morning on the radio and sat at the kitchen table and couldn't move for a while. Betty came in and saw my face and sat down next to me and took my hand and we didn't say anything for several minutes.

Ed White. Who floated outside Gemini 4 and said it was the saddest moment of his life to come back in. Who described the universe as beautiful and didn't want to leave.

Gus Grissom. Who they blamed for Liberty Bell 7 and who was wrong — who flew Gemini 3 perfectly and was going to fly Apollo and prove everything. Who hung a lemon on the spacecraft because he was right to be worried.

Roger Chaffee. Twenty-nine years old. His first spaceflight. He was going to the Moon. He was training for the Moon.

I'm angry in a way I haven't been at this program before. Not at the astronauts. Not at NASA in any generalized way. At the specific failures that killed them: the flammable materials in a pure oxygen environment, the hatch that couldn't be opened from inside, the wiring problems that Grissom complained about, the schedule pressure that pushed the program past what the hardware was ready for. These were known problems. Grissom knew. Some of the engineers knew.

They died on the launch pad. Not in space. Not on re-entry. On the ground, during a test, while three men were sitting inside a machine that was supposed to keep them alive.

The program will go on. It has to go on — to stop now would make their deaths meaningless in the worst way. But it can't go on the same way. The hatch has to be redesigned. The flammable materials have to be replaced. The wiring has to be redone. The quality control at North American Aviation has to be reformed.

These things will happen. There will be an investigation. There will be redesign. There will be delays.

I hope the people responsible for what happened — not the astronauts, not God, but the specific decisions that produced the specific conditions that killed these three men — have the reckoning they deserve.

Gus was right. He was right to be worried. He told his wife the program could be set back two years by an accident. He was right about that too.

I'm going to be quiet for a few days.
EOT
    ],

    [
        'date'     => '1967-04-10',
        'title'    => 'After the Fire — What Happens Now',
        'category' => 'Apollo Program',
        'tags'     => 'apollo 1,investigation,redesign,nasa,recovery',
        'excerpt'  => 'It\'s been two months since Grissom, White, and Chaffee died, and the investigation is ongoing. What comes next for the Moon program?',
        'content'  => <<<'EOT'
It's been two months since Grissom, White, and Chaffee died, and the investigation report is nearing completion. The public hearings have been painful — engineers testifying under oath about deficiencies they knew about and reported through channels, and about the channels that didn't work.

The review board will reportedly find widespread problems: the flammable Velcro and nylon foam, the inadequate hatch design, the wiring that was poorly routed and abraded in places, the quality control failures at North American Aviation, and a general culture of accepting risks that accumulated into a system that killed three men.

What comes next? Here's my understanding of the major changes being made.

The hatch: The Block I capsule had a complex two-piece inner hatch that opened inward and was essentially impossible to open quickly under any pressure differential, including the small positive pressure of the oxygen atmosphere. The redesigned Block II hatch opens outward, single-piece, and can be opened in seven seconds from the inside.

The atmosphere: The pure oxygen atmosphere is being changed for the launch pad and initial ascent phases. The new plan uses a mixed oxygen/nitrogen atmosphere at launch (reducing fire risk significantly) and then transitions to pure oxygen at lower pressure in orbit. This requires redesigning the environmental control system but eliminates the most dangerous phase of the oxygen risk.

The materials: Velcro is being systematically replaced or coated with fire-retardant material. Nylon nets are replaced with stainless steel. Every square inch of material inside the redesigned capsule has been evaluated for flammability.

The wiring: 1.5 miles of wire are being rerouted, replaced, and protected with improved insulation. Junction boxes are being redesigned.

This is an enormous amount of work. The Block II capsule is essentially being rebuilt from the inside out, which means a year at minimum before another crewed flight. We are not going to make Kennedy's by-the-end-of-the-decade goal on the original schedule. 1969 was always tight; it is now nearly impossible.

Nearly, I said. Not impossible.

James Webb, the NASA administrator, has said the agency is committed to moving forward. Congress has been difficult — there are hearings, there are accusations, there are the usual politicians who want to know who to blame. But the fundamental commitment to the Moon landing seems to be holding.

I've been thinking about Grissom again. He was the most experienced Apollo-era astronaut, the only Mercury veteran who flew in all three programs (Mercury, Gemini, Apollo). If he'd lived, I think he would have been the first man on the Moon. Not for certain — the crew assignment for the first landing mission would have depended on many factors. But he was good enough, and experienced enough, and trusted enough.

He was worried about his spacecraft. He was right. I hope the redesigned capsule is built with his concerns in mind — built with the knowledge that he was right and the people who dismissed him were wrong.

Build it right this time. Make it worthy of him.
EOT
    ],

    [
        'date'     => '1967-05-20',
        'title'    => 'Vladimir Komarov and the Soyuz 1 Crash',
        'category' => 'Space Race',
        'tags'     => 'komarov,soyuz 1,soviet,crash,cosmonaut death',
        'excerpt'  => 'The Soviets lost a cosmonaut too. Vladimir Komarov died yesterday when Soyuz 1 crashed on landing, its parachute tangled.',
        'content'  => <<<'EOT'
The Soviets lost a cosmonaut too.

Vladimir Komarov died yesterday when Soyuz 1 crashed on landing. The parachute system failed — tangled, didn't fully deploy — and the capsule hit the ground at high speed. Komarov is the first person to die during an actual spaceflight (as opposed to on the ground, as Grissom, White, and Chaffee did).

We knew they were testing a new spacecraft. Soyuz 1 was the first crewed flight of the Soyuz capsule, which the Soviets plan to use for lunar missions the same way we plan to use Apollo. There were apparently known problems with the spacecraft before launch — there are reports, which I take with some caution since they're from unnamed sources in secondary publications, that engineers raised concerns and were overruled by schedule pressure. Political pressure for a space anniversary celebration. The echoes of what happened to Grissom's crew are uncomfortable.

I've read that the mission had problems almost immediately after launch — attitude control failures, solar panels failing to deploy. There may have been discussion about sending a second Soyuz to attempt a rescue. That mission was apparently scrubbed when the problems became clear. Komarov was on his own.

He reportedly knew he was going to die. He made phone calls during descent. I've seen reports that he was angry — at the people who sent him up in a spacecraft he knew wasn't ready. Whether those reports are accurate or embellished, I cannot say. The Soviet program does not publish its failures the way we do.

The score is now: one American crew of three, one Soviet cosmonaut. Both programs had failures. Both programs have paid for those failures in human lives. Both programs, I assume, will press on.

Komarov was 40 years old. He had flown once before, on Voskhod 1. He was an experienced man, and if the reports are correct, he was a brave one — one who flew a spacecraft he had reason to doubt, because that was what his program needed from him.

There's a parallel universe where the Soyuz works perfectly and America and the Soviet Union race to the Moon with clean safety records. That's not the universe we live in. In the universe we live in, the first crewed flights of both the Apollo and Soyuz capsules killed people.

Human spaceflight is dangerous. We know that. The question is whether we build the systems carefully enough that the danger is genuinely necessary — not manufactured by poor management, by schedule pressure, by people in offices overruling engineers in the trenches.

I hope both programs learned what they needed to learn. I hope no one else dies because someone in a meeting decided a deadline was more important than a safety review.

Rest in peace, Vladimir Komarov. You deserved better from your program.
EOT
    ],

    [
        'date'     => '1967-09-08',
        'title'    => 'The Long Wait',
        'category' => 'Apollo Program',
        'tags'     => 'apollo,delay,1967,redesign,patience',
        'excerpt'  => 'We are waiting. The redesign of the Apollo capsule is ongoing, and there\'s nothing to do but wait and read and follow the technical reports.',
        'content'  => <<<'EOT'
We are waiting.

It's been eight months since the fire. The capsule redesign is ongoing. The schedule has been pushed back at least a year from the original plan. The earliest possible crewed Apollo flight is now late 1968 at the optimistic end of projections. The Moon by 1969 requires everything to go right from here, and nothing has been going right.

The Soviet lunar program, meanwhile, appears to be continuing. They've launched unmanned Zond spacecraft — circumlunar missions, flying around the Moon without entering orbit — which seems like preparation for something. The question is whether they're going to attempt a manned lunar flyby before Apollo can get there. A manned flyby is not a landing, but it would be another "first" in the ledger, and the Soviets clearly care about firsts.

I've been doing what I always do when there's nothing active to watch: reading.

I've been reading about the astronaut selection process. The third group of astronauts — selected in 1963 — includes Buzz Aldrin, Mike Collins, Pete Conrad, Bill Anders, Charlie Bassett, Al Bean, Gene Cernan, Roger Chaffee (who died in the fire), and several others. The fourth group, selected in 1965, added Ed White (who also died in the fire) and others including Dave Scott, who made the emergency abort during Gemini 8.

The newer groups have different backgrounds than the Mercury Seven. NASA expanded eligibility beyond just military test pilots to include research test pilots with degrees in science or engineering. Buzz Aldrin has a doctorate in orbital mechanics from MIT. He did his dissertation on rendezvous techniques. He went to the Moon specifically because of the research he'd done on how to get there.

I find that extraordinary. A man writes a PhD thesis on orbital mechanics, and then he goes to the Moon.

Betty has been asking me what I'm going to do when the space program is over. I told her it won't be over — there will always be more to do, further to go, other planets. She pointed out that I've been keeping this notebook for ten years now, through Mercury and Gemini and the Apollo preparation, and asked when I thought I'd feel like I'd seen enough.

I said: when we land on the Moon. After that, I can relax.

But first we have to actually do it. And right now we're waiting.

It's a long wait. But the alternative — stopping, giving up, letting the deaths of six people in two programs be for nothing — is worse.

Forward. Eventually.
EOT
    ],

    [
        'date'     => '1967-11-09',
        'title'    => 'Saturn V Test — Apollo 4',
        'category' => 'Apollo Program',
        'tags'     => 'apollo 4,saturn v,unmanned test,all-up testing',
        'excerpt'  => 'The Saturn V flew for the first time today. All three stages, no crew, and it worked. The noise reached Washington D.C.',
        'content'  => <<<'EOT'
The Saturn V flew for the first time today.

Apollo 4. All three stages, no crew, unmanned test. The Saturn V launched from Pad 39A at Kennedy Space Center, flew its full profile — first stage separation, second stage, third stage translunar injection — and the command module re-entered at near-lunar return velocity to test the heat shield.

It worked. All of it. On the first attempt.

The noise reportedly shook buildings miles away. The acoustic engineers had underestimated the sound intensity at the press site three miles from the pad; reporters and observers who were watching had windows rattle out of buildings and one woman had a ceiling tile fall on her. The shockwave from the exhaust hit the press site and felt, they said, like a punch in the chest. The ground shook. Camera equipment was jarred loose.

I wasn't there. I was in Ohio, watching coverage on television. But the correspondents who were there described it in terms that make me wish I had been: a sound that was not sound exactly but a physical pressure, a vibration that you felt in your sternum and your fillings, the ground moving. Five F-1 engines, each producing 1.5 million pounds of thrust, all firing at once. 7.5 million pounds of thrust total.

The "all-up" testing philosophy is what makes this remarkable. Previously, complex multi-stage rockets were tested stage by stage, validating each component before integrating the whole. George Mueller, who runs the Office of Manned Space Flight, insisted on testing the whole Saturn V system at once — all stages, live, in one flight. The engineers hated this idea; conventional wisdom said you'd never know what caused a failure if everything was flying at once. Mueller said there was no time for conventional wisdom; the deadline was 1969.

And it worked. First flight. All systems nominal.

The schedule has been saved, or at least has a path back. If Apollo 5 (unmanned lunar module test) goes well, and Apollo 6 (another unmanned Saturn V test), then Apollo 7 can be crewed. We might make 1969 after all.

The Saturn V worked on its first try.

I've been waiting for a piece of unambiguous good news for most of this year. Today I got it.
EOT
    ],

    [
        'date'     => '1968-01-10',
        'title'    => 'The Year Everything Will Happen',
        'category' => 'Apollo Program',
        'tags'     => 'apollo,1968,schedule,crewed flight,optimism',
        'excerpt'  => 'It\'s a new year and I think 1968 is going to be decisive. Either we get back on track for a Moon landing, or the goal of before 1970 becomes impossible.',
        'content'  => <<<'EOT'
It's a new year and I think 1968 is going to be decisive. I can feel it.

The schedule as I understand it: Apollo 5 is the unmanned test of the lunar module, scheduled for late January. Apollo 6 is another unmanned Saturn V test in the spring. Then — if everything goes well — Apollo 7 will be the first crewed Apollo mission, probably late 1968. If Apollo 7 goes cleanly, Apollo 8 could be ambitious.

What "ambitious" means for Apollo 8, I'm told, depends on what the Soviets do. There are strong rumors that the Soviet program is close to a manned lunar flyby — a mission where cosmonauts fly around the Moon, not landing, but seeing it up close and returning. If they do that first, it's another Soviet first, but it still leaves the landing for us.

More important to me is the question of whether the redesigned Apollo capsule is actually fixed. The Block II is substantially different from the Block I that killed Grissom, White, and Chaffee. New hatch, new atmosphere protocol, new wiring, new materials. The engineers at North American Aviation (now North American Rockwell after a merger) have reportedly worked around the clock for nine months to rebuild the capsule. Whether they got it right, only the first crewed mission will tell.

Wally Schirra is commanding Apollo 7. He was Mercury and Gemini, one of the most experienced astronauts, and he is famously demanding about hardware readiness. His presence on Apollo 7 is itself a quality signal — NASA doesn't put a skeptic like Schirra in that seat if they're not confident in the machine.

I'm also thinking about the mission timeline beyond Apollo 7. A lunar landing requires an Apollo command and service module plus the lunar module — both have to work. The lunar module hasn't flown yet with humans aboard. There will be a mission to test the lunar module in Earth orbit. Then possibly a deep-space test. Then the landing attempt.

That's four or five missions between now and the landing, if everything works. We have roughly two years. That's very, very tight.

I believe we're going to make it. I don't know exactly how to calculate that belief. The program has made it through the fire and the delays and the redesign and the Saturn V test. The talent in Houston and Huntsville and at the contractor sites is extraordinary. People are working very hard.

I believe we're going to make it. Betty thinks I've always been too optimistic.

She might be right. But the alternative — assuming we won't — seems worse. I'll keep my optimism and keep watching.

1968. This is the year.
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

    $cat_id = get_category_id_5( $p['category'] );

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

echo "\n=== Import 5 complete: {$created} created, {$skipped} skipped ===\n";
