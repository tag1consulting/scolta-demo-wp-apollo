<?php
/**
 * Apollo Blog Import - File 10
 * Posts: Filling in gaps - personal, technology, cultural, additional missions
 * Run via: ddev wp eval 'require "/var/www/html/import/import-10.php";'
 */

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname(__FILE__) . '/../' );
    require dirname(__FILE__) . '/../wp-load.php';
}

function get_category_id_10( $name ) {
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
        'date'     => '1958-04-02',
        'title'    => 'What NACA Was, and What NASA Will Be',
        'category' => 'Technology',
        'tags'     => 'naca,nasa,langley,ames,research,aeronautics',
        'excerpt'  => 'The National Aeronautics and Space Administration is going to absorb the National Advisory Committee for Aeronautics, which has been America\'s aeronautics research organization for 43 years. Here\'s why that matters.',
        'content'  => <<<'EOT'
The National Aeronautics and Space Administration, which becomes official in October, is going to absorb the National Advisory Committee for Aeronautics — NACA — which has been America's aeronautics research organization since 1915.

NACA is worth understanding because it's the foundation everything else is built on.

For 43 years, NACA has been doing the quiet, fundamental work of understanding how aircraft fly: testing airfoil shapes in wind tunnels, developing supersonic aerodynamics, building the research aircraft programs that produced the Bell X-1 (first supersonic flight), the Douglas D-558 (first Mach 2 flight), and eventually the X-15. When engineers needed to know how air behaves over a wing at 400 miles per hour, they called NACA. When they needed to know how to shape a nose cone to survive supersonic re-entry, they called NACA.

NACA has research centers — Langley in Virginia, Ames in California, Lewis in Cleveland — with wind tunnels, flight test facilities, and institutional knowledge built over decades. These centers become the core of NASA.

The astronauts themselves come partly from this tradition. Research test pilots who flew experimental aircraft at Edwards Air Force Base — the NASA High Speed Flight Station — were doing NACA research. Yeager broke the sound barrier on a government research aircraft. Scott Crossfield, who flew the X-2 and early X-15 missions, was NACA. Neil Armstrong joined NACA's Lewis Flight Propulsion Laboratory before becoming a test pilot.

The specific knowledge that makes rocket re-entry survivable — the heat shield design, the blunt body concept that counterintuitively works better than a sharp nose for re-entry vehicles — came from NACA research. Dr. Harvey Allen at Ames developed the blunt body theory in the 1950s. Without it, Mercury and Apollo can't come home.

NACA becomes NASA, and the aeronautics expertise becomes spaceflight expertise. The transition is mostly smooth because the problems are related: both involve aerodynamics at high speeds, both involve materials that have to survive extreme environments, both involve precision control systems.

The institutional memory matters. You don't build what NASA is building from scratch. You build it on 43 years of careful quiet research.
EOT
    ],

    [
        'date'     => '1959-09-14',
        'title'    => 'Luna 2 Hits the Moon',
        'category' => 'Space Race',
        'tags'     => 'luna 2,soviet,moon impact,first spacecraft moon,1959',
        'excerpt'  => 'The Soviet Union crashed a spacecraft into the Moon yesterday. Luna 2. The first human-made object to reach another world.',
        'content'  => <<<'EOT'
The Soviet Union crashed a spacecraft into the Moon yesterday. Luna 2.

The first human-made object to reach another world. They aimed a rocket at the Moon and hit it.

The Moon is 240,000 miles away and moves. Hitting it requires calculating a trajectory that intersects the Moon's future position, not its current position. Luna 2 took 36 hours to travel there. The Moon moved considerably in 36 hours, and the Soviet engineers calculated where it would be and aimed for that.

Luna 2 hit the Moon at about 7,000 miles per hour and is now on the surface — or rather, part of it is on the surface and part of it is dispersed impact debris. It wasn't a soft landing; it was an intentional crash. The scientific value was primarily in demonstrating that you could hit the Moon, and in the data transmitted during the flight: Luna 2 confirmed that the Moon has no measurable magnetic field and no radiation belt.

A month earlier, Luna 1 had missed the Moon entirely and gone into solar orbit, becoming the first spacecraft to escape Earth's gravity. So the Soviets tried twice and got one miss and one hit.

I'm struck by the precision implied in "one miss and one try." They had to understand orbital mechanics well enough to aim for the Moon and hit it within 36 hours. That requires serious mathematical and computational infrastructure.

The political effect is significant: the Soviets have reached the Moon before us. Their hardware is on the lunar surface. Whether that means anything practically — no, not at all — but symbolically, it's another item in the "firsts" ledger.

The Moon is 240,000 miles away and there's Soviet hardware on it right now. Objects don't have nationality; that piece of metal is just metal. But the people who sent it there are Soviet engineers, doing work that their American counterparts have not yet done.

We're still catching up. We haven't stopped catching up since October 1957.
EOT
    ],

    [
        'date'     => '1960-08-12',
        'title'    => 'Echo 1 — The Big Balloon in the Sky',
        'category' => 'Technology',
        'tags'     => 'echo 1,communication satellite,passive satellite,telstar,balloon',
        'excerpt'  => 'Echo 1 launched last week — a 100-foot aluminized balloon in orbit that reflects radio signals from Earth back to Earth. You can see it with the naked eye.',
        'content'  => <<<'EOT'
Echo 1 launched last week and you can see it with the naked eye.

It's a 100-foot aluminized mylar balloon — inflated in orbit, reflecting sunlight, visible as a bright moving star from the ground. The first passive communication satellite: radio signals aimed at it from Earth bounce off its surface and can be received on the other side of the country.

The technology is elegantly simple. You don't need active electronics aboard Echo 1; it's just a mirror. Signal goes up, bounces off, comes down elsewhere. NASA and Bell Labs used it to transmit a recorded voice message from New Jersey to California — the first transcontinental communication via satellite.

The limitation is obvious: you can only use it when the satellite is above the horizon at both ends of the link, and a low-orbit satellite moves fast, so the window is short. And the signal degrades because most of the radio energy bounces away in directions nobody is listening. A passive reflector is inefficient.

But it proved the concept. Satellites can relay communications. The next step — active relay satellites with receivers, amplifiers, and transmitters aboard — is being developed. Telstar is coming in a couple of years, and it will do what Echo 1 does, but efficiently and reliably.

The thing that delights me about Echo 1 is the visibility. You can go outside on a clear night and watch a human-made object sail across the sky, and know that radio signals are bouncing off it. The technology is so tangible. No computer, no black box, no mystery — just a shiny balloon in orbit, doing physics.

My neighbor Harold looked at it last Tuesday evening and said, "That's us?" — meaning that bright moving light is a human thing, not a star. I said yes. He watched it sail behind a tree and said, "Huh."

Harold doesn't make speeches. But that "huh" was a considered one.
EOT
    ],

    [
        'date'     => '1962-07-10',
        'title'    => 'Telstar — Live Television Across the Atlantic',
        'category' => 'Technology',
        'tags'     => 'telstar,communication satellite,transatlantic,live television,bell labs',
        'excerpt'  => 'Last night, for the first time in history, a live television picture was transmitted across the Atlantic Ocean via satellite. The first image: an American flag and a ground station.',
        'content'  => <<<'EOT'
Last night, for the first time in history, a live television picture was transmitted across the Atlantic Ocean via satellite.

Telstar 1, launched yesterday by Bell Labs and NASA, relayed a television signal from the Andover Earth Station in Maine to the Pleumeur-Bodou station in France and the Goonhilly station in Britain. The first image transmitted: an American flag in front of the Andover antenna, and a brief scene of the antenna itself.

Not very dramatic, as television goes. But the fact of it is extraordinary: a live picture, traveling up to a satellite 22,000 miles away (well, Telstar is much lower than that — about 3,500 miles at its orbit), being received in Europe in real time.

Telstar is not geostationary — it moves in a low-to-medium orbit, which means the window for transmission is only about 20 minutes per orbit as the satellite moves into view of both ground stations simultaneously. But in that window, the signal is reliable and the picture quality is good.

The implications for broadcasting and communication are enormous. Right now, transatlantic television requires physically flying film across the ocean — a day's delay. Telstar means live. News events, speeches, sporting events — anything could, in principle, be transmitted live across the ocean the moment it happens.

The space race is often told as a story about prestige and rockets and astronauts. But the communication satellite is perhaps the most practically consequential space development of the decade. Satellites like Telstar's successors will eventually create the infrastructure for a genuinely global communication system.

I keep thinking about what this means for the space program itself. The astronauts communicate with Mission Control via radio, which works for one spacecraft. But as the network of spacecraft grows, as we go further from Earth, the communication infrastructure becomes critical.

Telstar is Year One of that infrastructure. Small beginning, but the right one.
EOT
    ],

    [
        'date'     => '1963-05-10',
        'title'    => 'What Weightlessness Actually Feels Like',
        'category' => 'Technology',
        'tags'     => 'weightlessness,zero g,training,parabolic flight,vomit comet,free fall',
        'excerpt'  => 'How do you train for weightlessness on Earth? The answer is parabolic flight — an aircraft that flies a specific arc to create about 30 seconds of free fall. They call it the Vomit Comet.',
        'content'  => <<<'EOT'
How do you train for weightlessness on Earth?

The answer is parabolic flight. A modified transport aircraft — currently a KC-135 tanker — flies a specific arc: nose up at 45 degrees, then over the top of the arc, then nose down at 45 degrees. At the top of the arc, for about 25-30 seconds, everyone and everything inside the aircraft is in free fall. True weightlessness.

They call it the Vomit Comet. This is accurate.

The aircraft does this repeatedly — 40-60 parabolas per flight — and each parabola gives 25-30 seconds of free fall. Between parabolas, there's a pull-up that creates about 1.8 Gs (nearly twice normal gravity) as the aircraft repositions for the next arc.

The experience: everything floats. Water forms spheres. Crumbs drift. Equipment drifts. Your body drifts unless you hold on. You have to relearn how to move: in weightlessness, pushing against a surface sends you flying; you have to push gently and expect to rotate if the push isn't through your center of mass. Simple tasks — turning a screw, eating from a spoon — become completely different.

The astronauts use the KC-135 parabolas to practice procedures: donning and doffing spacesuits, eating and drinking, operating controls, doing EVA tasks. The 25-30 seconds is enough to understand the basic challenge, though it's obviously not sufficient for the full experience of days in space.

The nausea comes from the inner ear, which is designed to detect gravity. In free fall, the otoliths (calcium crystals that normally settle toward the floor of the inner ear chamber) float freely, sending confusing signals to the brain. Most people adapt after a few parabolas; some people adapt only after days in actual space (full weightlessness); some people never fully adapt and deal with space motion sickness for the early days of every mission.

The astronauts I've read about take varying approaches to the nausea question. Most say they've adapted. A few admit to having issues early in missions. Nobody describes it as pleasant.

The training aircraft is unglamorous. The airport is a military base. The equipment is a KC-135, not a spacecraft. And yet this is where the astronauts learn how to float.
EOT
    ],

    [
        'date'     => '1963-09-15',
        'title'    => 'Eating on the Moon',
        'category' => 'Technology',
        'tags'     => 'food in space,tube food,freeze dried,meal systems,nutrition',
        'excerpt'  => 'I\'ve been reading about the food systems for space missions. The early Mercury food was toothpaste-tube paste and cube-sized bites. It\'s improving, but slowly.',
        'content'  => <<<'EOT'
I've been reading about the food systems for space missions, which is more complicated than it sounds.

The obvious constraints: no gravity, so liquids and crumbs float away and get into equipment and astronaut eyes and lungs. Limited storage space, so food has to be calorie-dense. Long-duration missions (Gemini will go up to two weeks), so you can't just eat sandwiches from a cooler. The spacecraft is small, cold, and has no kitchen.

Mercury used two approaches. Bite-size cubes: food packed into one-inch cubes and coated with gelatin to prevent crumbling. Squeeze tubes: puréed food in toothpaste-like tubes, squeezed into the mouth. John Glenn reported the bite-sized cubes were adequate. The squeeze tubes were less popular — something about eating applesauce and puréed meat from a tube.

For Gemini, they've improved the cube coatings and developed rehydratable foods: freeze-dried portions in sealed packets that the astronaut adds water to and then squeezes out. Freeze-drying removes moisture while preserving most of the flavor and nutrition, and the packets are much lighter than their reconstituted weight.

The rehydration water comes from a byproduct of the fuel cells — the hydrogen and oxygen that power the spacecraft combine to make water as a waste product. So the astronauts drink their fuel cell exhaust.

The bigger challenge is morale. Eating is not just nutrition; it's pleasure, it's routine, it's a social activity. In the confined, stressful environment of a spacecraft, a meal that's merely adequate is a small defeat for crew morale. The food engineers are trying to improve variety and palatability, but they're fighting against the constraints of mass and volume and packaging.

The smuggled corned beef sandwich incident on Gemini 3 — John Young brought a real sandwich from a deli in Cocoa Beach — was technically against mission rules (the crumb problem) but humanly understandable. After weeks of freeze-dried packets and bite-cubes, a corned beef sandwich from a deli is pure luxury.

On the Moon, they'll eat better than early Mercury but still nothing like home. Freeze-dried reconstituted meals, eaten in suits or with helmet removed inside the LM. Somewhere on the to-do list after the first landing: improve the food.
EOT
    ],

    [
        'date'     => '1964-04-15',
        'title'    => 'How the Computers Are Built',
        'category' => 'Technology',
        'tags'     => 'integrated circuits,transistors,miniaturization,apollo guidance computer,fairchild',
        'excerpt'  => 'The Apollo guidance computer uses integrated circuits — a technology that didn\'t exist ten years ago. The space program is partly responsible for developing them into practical components.',
        'content'  => <<<'EOT'
The Apollo guidance computer uses integrated circuits, which didn't exist commercially ten years ago.

Jack Kilby at Texas Instruments and Robert Noyce at Fairchild Semiconductor developed the integrated circuit independently in 1958-1959. The idea: instead of wiring together individual transistors, resistors, and capacitors, manufacture all of them on a single piece of semiconductor (silicon), connected by deposited metal traces. One chip replaces dozens of discrete components.

The advantages: smaller, lighter, more reliable (fewer solder joints mean fewer failure points), lower power consumption. All of these matter enormously for spacecraft electronics.

The Apollo guidance computer was one of the first large-scale uses of integrated circuits. NASA's decision to use ICs for the AGC created a large, reliable, government-funded market for the new technology at a time when Fairchild and others were still proving the manufacturing process. This market support was critical to the commercial development of the IC industry.

Fairchild supplied roughly 60% of all integrated circuits produced in the United States in 1962, mostly for the military and space programs. The manufacturing learning curve — each generation of chips gets cheaper and more reliable as production scales — was accelerated by this demand.

Which means: the home computers that are beginning to appear in hobbyist magazines, the calculators, the digital watches — these are all downstream from the investment that NASA made in integrated circuits for the Apollo guidance computer. The technology that makes a pocket calculator possible exists partly because the space program needed small, reliable computers.

The AGC has 4,096 words of erasable memory and 36,864 words of fixed memory. By the standards of the large IBM mainframes of the time, this is negligible. By the standards of what you could fit in a spacecraft, it was a miracle.

The engineers who wrote the software for the AGC had to be extraordinarily economical. No wasted instructions. No unnecessary subroutines. Every word of memory had a purpose. It's programming as craft rather than programming as carpentry — you cut nothing you don't need.

The program that flew to the Moon was hand-crafted, line by line, in a language called MAC/AMS, by a team at MIT Instrumentation Lab led partly by Margaret Hamilton, who coined the term "software engineering" to describe what she was doing.

Software engineering. Coined for the Moon.
EOT
    ],

    [
        'date'     => '1965-07-12',
        'title'    => 'Mariner 4 Photographs Mars',
        'category' => 'Science',
        'tags'     => 'mariner 4,mars,unmanned probe,craters,planetary science',
        'excerpt'  => 'Mariner 4 flew past Mars on July 14 and took 22 photographs. The first close-up images of another planet. Mars looks like the Moon.',
        'content'  => <<<'EOT'
Mariner 4 flew past Mars on July 14 and took 22 photographs during the flyby. The first close-up images of another planet ever transmitted to Earth.

Mars looks like the Moon.

That's the most startling finding. The images show a heavily cratered surface, reminiscent of the lunar highlands. No canals (which nobody with sense expected anyway, but there they are, or aren't). No evidence of vegetation or liquid water. An ancient, cold, cratered desert.

There are important differences from the Moon: the craters are more eroded, suggesting Mars has (or had) processes that weathered them. The atmosphere is extremely thin — Mariner's radio occultation experiment measured the Martian surface pressure at about 4-7 millibars, compared to 1,013 millibars on Earth's surface. That's essentially vacuum from a biological or engineering standpoint. The thin atmosphere means very little protection from radiation and no significant thermal regulation.

This is both discouraging and fascinating. Discouraging because the odds of Mars having current surface life are lower than optimistic pre-Mariner speculation suggested. Fascinating because the surface looks like early Earth might have looked — before plate tectonics and erosion reshaped everything, before the atmosphere changed. Mars may be a preserved record of what rocky planets look like in an early stage.

The 22 photographs represent about 1% of the Martian surface. We've made a 22-frame sample of a planet. The remaining 99% is unknown from direct imaging.

The unmanned space program runs in parallel with the human spaceflight program. While Gemini is practicing orbital rendezvous, Mariner is flying past planets. The scientific programs are separate but the rocket technology is related.

What would it take to send people to Mars? The Mariner data is discouraging: thin atmosphere means you can't use aerodynamics for descent, you need rockets. Long trip — six months each way with current rocket technology. Long stay — you can't return immediately, you wait for the planets to align again. 500+ days total mission duration. Radiation exposure. Communication delays of up to 22 minutes.

Mars is hard in a different way than the Moon. The Moon is hard because it's dangerous. Mars is hard because it's far.

Someday, though. Someday.
EOT
    ],

    [
        'date'     => '1966-02-12',
        'title'    => 'A Normal Tuesday at Home',
        'category' => 'Personal',
        'tags'     => 'everyday life,betty,suburban,home,insurance,ohio,normal day',
        'excerpt'  => 'I haven\'t written a normal-day entry in a long time. Let me describe what a Tuesday in February 1966 looks like for a man who follows the space program from Ohio.',
        'content'  => <<<'EOT'
I haven't written about an ordinary day in a long time. Let me try.

Yesterday was Tuesday. I woke at 6:15 and made coffee while Betty slept in — she doesn't start until 8 at the school. I read the newspaper at the kitchen table: the main news is about Vietnam (always Vietnam) and a civil rights bill moving through Congress and something about a Teamster pension dispute. The space news is inside: a brief note about the upcoming unmanned Apollo test flights.

I got to the office at 8:30. I work insurance claims — property and casualty, nothing exciting. Yesterday there was a fire claim from a restaurant in Lancaster that I'm reviewing, a fender-bender series from a single intersection that suggests someone should look at the signal timing, and a homeowner flooding claim that I'm fairly sure involves some creative interpretation of "sudden and accidental."

At lunch I read a magazine article about the Apollo spacecraft that I'd set aside earlier in the week. The article described the command module's environmental control system — the equipment that maintains cabin atmosphere, temperature, and humidity. I made notes in the margin. Harold would ask me later why I make notes in magazines and I would say because I want to remember things and he would shake his head.

Harold came over for dinner — his wife Edna was at her sister's. Betty made a roast. We sat at the kitchen table for two hours. Harold talked about his job (heavy equipment sales), his garden plans for spring, his nephew's situation in Vietnam. I talked about the restaurant fire claim and the Apollo article. Betty moved between conversations, adding things where she had opinions, disappearing to read when she didn't.

Harold asked when the next actual rocket launch was. I said probably late summer, the first Lunar Orbiter. He nodded. "So nothing dramatic until then." I said that was mostly right. He said "Good. My nerves can use a rest."

This is what following the space program looks like from Ohio. Reading, taking notes, waiting. Dinner conversations. A magazine in a lunch bag.

I'm keeping this notebook so that whatever small part I played — witness, attendant, enthusiast — is recorded somewhere. History mostly records the people who made things happen. Somebody should record the people who watched it happen.
EOT
    ],

    [
        'date'     => '1967-08-01',
        'title'    => 'The Summer of Love and the Space Program',
        'category' => 'Personal',
        'tags'     => 'summer of love,1967,counterculture,space program,values,meaning',
        'excerpt'  => 'San Francisco is full of young people in flowers, and I\'ve been thinking about what they think of the space program — if they think of it at all.',
        'content'  => <<<'EOT'
San Francisco is full of young people in flowers this summer, and I've been thinking about what they think of the space program — if they think of it at all.

The "Summer of Love" is in every magazine this month. Haight-Ashbury, 100,000 young people, music and drugs and a general rejection of everything the generation before them represents — conformity, materialism, the corporate structure, the war. They want something different, though exactly what is unclear even to them.

I find myself occupying an odd position. I'm 42 years old, which puts me firmly in the generation being rejected. I drive a late-model Ford. I wear a suit to work. I'm the demographic that the counterculture is defining itself against.

But I'm also a person who thinks the most important thing happening right now is the attempt to go to the Moon, which is not obviously compatible with the anti-materialism, anti-technology strain of the counterculture.

Some of the young people in San Francisco, from what I read, are excited about the space program in their own way — they see it as part of a larger expansion of human consciousness and possibility. Space is psychedelic in a metaphorical sense: looking at the Earth from space, seeing the planet as a whole, could change how people think about their relationship to the world.

Others in the counterculture see the space program as the military-industrial complex in a different hat: government money, corporate contractors, test pilots following orders from generals in Houston. The same system that's running the Vietnam War is running the space program.

I don't think these views are entirely wrong. The space program does have military roots and corporate structure. And there is something genuinely consciousness-expanding about the idea of seeing the Earth from outside.

What I know is: the people building the Apollo program are mostly not hippies, but they're also not the gray suited conformists of the stereotype. They're passionate, obsessive, willing to work 80-hour weeks for years on a problem because the problem is worth solving. They don't look like the counterculture but they share the underlying drive — the sense that the ordinary world is insufficient and that something larger is possible.

Different paths. Same restlessness.
EOT
    ],

    [
        'date'     => '1969-05-28',
        'title'    => 'What I Tell People When They Ask Why I Care',
        'category' => 'Personal',
        'tags'     => 'passion,why space,motivation,personal,explaining enthusiasm',
        'excerpt'  => 'My cousin Marge visited last week and asked why I care so much about the space program. I tried to explain. This is what I said, more or less.',
        'content'  => <<<'EOT'
My cousin Marge visited last week from Cincinnati and asked why I care so much about the space program. She said it politely, but the implication was: it's not your life, it's not your job, why do you follow it like it's your religion?

I tried to explain. This is approximately what I said.

I was 32 years old when Sputnik launched. I was an insurance adjuster in Ohio. I had no special connection to engineering or the military or aerospace. The space race arrived in my life through radio and newspaper and I didn't choose to be interested — it just was. The beep from that satellite lodged in my mind like a splinter and it hasn't come loose in twelve years.

What is it, exactly, about this that's held me?

Part of it is the scale. The universe is approximately 13.8 billion years old and approximately 93 billion light-years in diameter, containing somewhere between 100 billion and one trillion galaxies each containing similar numbers of stars. Against this, a human life on a particular planet is almost incomprehensibly small. And yet here we are, these small things, building machines to go to the Moon. The disproportion between what we are and what we're attempting is dizzying.

Part of it is the problem-solving. I'm not an engineer but I love watching engineering problems get solved. The F-1 combustion instability, the heat shield design, the guidance computer software, the EVA suit flexibility — these are hard problems with real solutions that smart people found through systematic work. I follow these problems the way other people follow mystery novels: I want to know how it comes out.

Part of it is the people. I've written about the Mercury Seven and the Gemini crews and the Apollo astronauts, but also about the flight controllers and the engineers and the technicians. These are remarkable human beings doing their best work in difficult conditions. I'm proud of them in the way you're proud of someone you don't know personally but whose existence makes the world feel better.

And part of it is simpler than all of that. I want to know what it looks like from out there. I want to know what it looks like to see the Earth from the Moon. I've wanted that since 1957 and in about seven weeks I'm going to find out.

Marge nodded and said she supposed that made sense.

Seven weeks.
EOT
    ],

    [
        'date'     => '1970-01-10',
        'title'    => 'The New Decade',
        'category' => 'Personal',
        'tags'     => 'new decade,1970,looking back,looking ahead,space program future',
        'excerpt'  => 'The 1960s are over. I\'ve been keeping this notebook since 1957. Let me look at what the decade was and what the 1970s might be.',
        'content'  => <<<'EOT'
The 1960s are over. I've been keeping this notebook since 1957, so the whole of the decade is in here.

The decade opened with Mercury and Kennedy and the beginning of the great promise. It closed with the first humans on another world. In between: more loss than I could have predicted, more achievement than I dared hope for.

Kennedy's speech. The fire. Gagarin. Glenn. The Gemini program's patient, systematic buildup. Apollo 8 on Christmas Eve. Armstrong's boot in the dust of the Sea of Tranquility. "Magnificent desolation." The 1202 alarm. The footprints that will be there for a million years.

The 1960s were the decade that decided the Moon. The 1970s will decide what comes next.

Some things I know about the new decade: Apollo 13 is in January, 14 in late 1970, then 15 through 17. Skylab is being planned. The Space Shuttle is in early development. Nixon's administration will decide how much of the ambitious post-Apollo vision gets built.

Some things I suspect but don't know: the Soviet program will continue, though in what form I'm not sure. A space station is probable for them too. The Moon landing competition is over; what comes next is less clearly defined.

What I hope for: that the 1970s are a decade of consolidation and building. Not the frantic race-driven pace of the 1960s, but deliberate, sustainable space development. A permanent presence in low Earth orbit. More lunar science. The Outer Planets probes that will eventually reach Jupiter and Saturn.

What I worry about: budget cuts, political disinterest, the sense that now that we've won the race there's nothing left to run for.

The decade is new. The program continues. I am paying attention.
EOT
    ],

    [
        'date'     => '1971-04-19',
        'title'    => 'Salyut — The Soviets Build a Space Station',
        'category' => 'Space Race',
        'tags'     => 'salyut,soviet space station,long duration,1971',
        'excerpt'  => 'The Soviet Union launched the world\'s first space station on April 19. Salyut 1 is in orbit, waiting for a crew.',
        'content'  => <<<'EOT'
The Soviet Union launched the world's first space station on April 19. Salyut 1 is now in orbit, waiting for a crew.

Another first. The Soviets, despite losing the race to land on the Moon, have beaten us to space station operations.

Or they will have beaten us, if the crew gets up there successfully. The Soyuz 10 mission launched to dock with Salyut and transfer crew, but docking was achieved only partially and the crew didn't transfer. The reasons aren't fully clear from Western reporting; there may have been a docking mechanism failure.

Soyuz 11 is planned next, with Dobrovsky, Volkov, and Patsayev. If that crew successfully transfers and occupies Salyut, they'll be doing in 1971 what the Americans won't do until Skylab in 1973.

The competition has shifted from landing on the Moon to operating in orbit long-term. The Soviets appear to have decided that building and operating space stations is where they focus now. This is a rational strategic choice: they lost the Moon race, but long-duration orbital operations is a field where steady, undramatic work can produce significant advantages.

I've been thinking about what "winning the space race" actually means now that the landing has happened. The Moon race had a clear endpoint: land first. Post-Moon, the competition is more diffuse. Who operates more efficiently? Who stays up longer? Who develops better technology for living in space?

These don't produce the same dramatic headlines as the first landing. But they may matter more in the long run.

Salyut 1 is up there right now. A Soviet space station. I hope Soyuz 11 makes it aboard. I hope the crew is safe and the science is good. The same way I hoped for everyone who flew in the American program: I want them to come home.

It's not less true because they're Soviet.
EOT
    ],

    [
        'date'     => '1971-06-30',
        'title'    => 'Soyuz 11 — A Tragedy in Three Lines',
        'category' => 'Space Race',
        'tags'     => 'soyuz 11,salyut 1,soviet,death,pressure valve,crew loss',
        'excerpt'  => 'The Soyuz 11 crew — Dobrovsky, Volkov, Patsayev — spent 23 days on Salyut 1 and set a new space endurance record. They died during re-entry when a pressure valve opened prematurely.',
        'content'  => <<<'EOT'
The Soyuz 11 crew set a new space endurance record: 23 days, 18 hours aboard Salyut 1. A genuinely impressive scientific mission by any measure.

Georgy Dobrovsky, Vladislav Volkov, and Viktor Patsayev — all three dead on June 30, during the re-entry of Soyuz 11.

A pressure equalization valve in the capsule opened prematurely, allowing the cabin atmosphere to vent to vacuum. At 104 miles altitude, with parachutes not yet deployed. The crew had no spacesuits — like Voskhod, to save weight and volume in the small capsule. There was nothing they could do. The leak was detected too late for manual closure to save them.

The recovery crews opened the capsule expecting to greet the returning cosmonauts and found three dead men, seated, in normal posture. They had been conscious when the leak began — autopsy showed attempts to close the valve manually — but the decompression was fatal within roughly 60-90 seconds at that altitude.

This is the second time the Soviets have flown crew without spacesuits and the second time this choice has had consequences. Voskhod got lucky (barely). Soyuz 11 did not.

I don't know what to say about this that I haven't said before. The people in this program — ours and theirs — are extraordinary and brave and the tragedies are real regardless of politics. Patsayev, Volkov, Dobrovsky: three men who spent 23 days in space doing good science and came home to nothing.

The Soyuz will fly again with suits. The valve will be redesigned. The lessons will be incorporated. This is how the terrible things teach us — at the cost of people who deserved better.

I grieve for them and for their families.
EOT
    ],

    [
        'date'     => '1972-04-16',
        'title'    => 'Apollo 16 — Descartes Highlands',
        'category' => 'Apollo Program',
        'tags'     => 'apollo 16,john young,charles duke,ken mattingly,descartes,highlands',
        'excerpt'  => 'John Young and Charlie Duke landed in the Descartes Highlands yesterday. The terrain is older and rougher than the maria. Young jumped a perfect salute.',
        'content'  => <<<'EOT'
John Young and Charlie Duke landed in the Descartes Highlands yesterday. Ken Mattingly orbits in the command module.

I need to say something about John Young. John Young is the least famous of the great astronauts. He flew Gemini 3, Gemini 10, Apollo 10, Apollo 16, and will eventually fly the first Space Shuttle. He's walked on the Moon. He's the only person to fly both the Gemini and Shuttle programs. He is, by any measure, one of the most accomplished pilots and test pilots in American history.

He is also the man who photographed jumping a foot off the lunar surface with both feet and both fists in the air while looking directly at the flag, in what may be the most exuberant photograph from the entire Apollo program. The flag, the suit, the black sky, the dust cloud around his boots, the perfect trajectory. Pure joy, documented at one-sixth gravity.

Young and Duke spent 71 hours on the surface, the longest surface stay of any Apollo mission at that point. Three EVAs. The Descartes site was chosen because the pre-mission geologists believed the highlands terrain might contain volcanic material — different from the mare basalts. More ancient.

The samples came back and contradicted the prediction: Descartes is not volcanic. It's impact ejecta — material thrown up by one of the major basin impacts. This is actually more valuable in some ways: it tells us about the impacts that shaped the early lunar crust, rather than the later volcanism. But it's a reminder that our pre-mission models were wrong, and that sending people to pick up the rocks is how you find out.

Young running and jumping on the Descartes Highlands. Eleven men have walked on the Moon now. One more landing to go.

The tenth man will be the last man, for a long time. I think I know who it will be.
EOT
    ],

    [
        'date'     => '1973-11-15',
        'title'    => 'The Space Age at Sixteen',
        'category' => 'Personal',
        'tags'     => 'anniversary,sputnik,sixteen years,reflection,1957,space age',
        'excerpt'  => 'It has been sixteen years since Sputnik. I was 32 years old then, a man in a bathrobe in Ohio staring up at an ordinary sky. Now I\'m 48.',
        'content'  => <<<'EOT'
It has been sixteen years since Sputnik.

I was 32 years old then. A man in a bathrobe in Ohio, standing in his backyard at 11 PM, staring up at an ordinary sky that had just become extraordinary. I wrote in the first entry of this notebook that I could feel it happening, the change, the dividing line between before and after.

Now I'm 48. Betty and I are fine. Harold and Edna are fine. The garden is good this year. My father passed away in 1971; my mother lives with my sister in Cleveland. Normal life, ordinary life, the life of a person who is not doing the impossible things but has been watching them get done.

What happened in sixteen years:

We put twelve men on the Moon.

I keep coming back to that. All the rest — Sputnik, Mercury, Gemini, the fire, the waiting, the Apollo flights one by one, Skylab, Salyut, the deaths — all of it builds to that one fact, which is the defining achievement of my adult life and possibly of the century: twelve human beings walked on the Moon.

The space program is quieter now. Skylab is done (the third crew came back in February). The Shuttle is in development. There's no dramatic race, no countdown to a historic first. The work continues but the urgency has changed.

I'll keep this notebook as long as there are things to write. There will always be things to write.

The universe is 13.8 billion years old and 93 billion light-years across. We haven't even started. We've taken a step — one small step, you might say — toward the door.

The rest of the journey is ahead.

I'm still paying attention.
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

    $cat_id = get_category_id_10( $p['category'] );

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

echo "\n=== Import 10 complete: {$created} created, {$skipped} skipped ===\n";
