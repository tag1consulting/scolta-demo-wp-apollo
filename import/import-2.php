<?php
/**
 * Apollo Blog Import - Part 2: Apollo 12, Apollo 13, Apollo 14
 * Run via: ddev wp eval 'require "/var/www/html/import/import-2.php";'
 */

$posts = [];

// ============================================================
// APOLLO 12
// ============================================================

$posts[] = [
    'date'     => '1969-11-14',
    'title'    => 'Lightning Hit the Rocket',
    'category' => 'Apollo 12',
    'tags'     => ['apollo-12', 'lightning', 'launch', 'scary-moment', 'program-alarms', 'near-miss', 'what-went-wrong', 'pete-conrad', 'john-aaron'],
    'excerpt'  => 'Apollo 12 launched today into a stormy sky. Thirty-six seconds after liftoff, lightning struck the Saturn V. Twice. The spacecraft lost power to most of its systems. Mission Control nearly called an abort. One flight controller — twenty-six-year-old John Aaron — knew exactly which switch to throw. They continued to the Moon.',
    'content'  => '<p>Apollo 12 launched today and I am still a little shaky from watching it.</p>

<p>The launch had been delayed a couple of days for weather. When they finally launched this morning, November 14th, the sky was overcast and threatening — not ideal, but within limits. The Saturn V ignited at 11:22 AM Eastern. I watched on television. The rocket rose. Standard ascent. And then, thirty-six seconds into the flight, something happened that I didn\'t immediately understand from watching the television coverage.</p>

<p>Lightning struck the Saturn V. Then lightning struck it again, twelve seconds later. Two separate lightning strikes on a spacecraft in flight carrying three men to the Moon.</p>

<p>The crew — Pete Conrad, Dick Gordon, and Alan Bean — suddenly had alarms everywhere. Their electrical system had gone haywire; the lightning triggered the fuel cells to disconnect from the main bus. Most of the spacecraft\'s displays went dark or wrong. Conrad\'s voice on the radio was controlled but quick: "Okay, we just lost the platform." The inertial navigation system had lost alignment. They were thirty-six seconds off the ground and already in serious trouble.</p>

<p>Mission Control came very close to calling an abort. The Flight Director, Gerry Griffin, and the flight controllers were looking at a spacecraft whose telemetry data suddenly looked like nonsense.</p>

<p>Then one young flight controller named John Aaron — twenty-six years old, the EECOM (the electrical systems officer) — said something. He recognized the pattern from a test failure he\'d seen a year earlier in a simulation. He knew what he was looking at. He called out: switch to "SCE to auxiliary." A specific switch position that would restore power to the Signal Conditioning Equipment that sends data to the ground. Griffin said do it. CapCom Gerald Carr relayed it to the crew.</p>

<p>Alan Bean said "SCE to auxiliary?" He wasn\'t sure where the switch was. He found it. He switched it. The telemetry data on the ground came back. The spacecraft, it turned out, was mostly fine — the lightning had caused electrical havoc but the navigation platform could be realigned using star trackers, and the guidance computer was working. They were going to be okay.</p>

<p>Conrad, Gordon, and Bean are on their way to the Moon.</p>

<p>I sat with this story for the rest of the day, reading everything that came over the radio and television. John Aaron. Twenty-six years old. Had seen a similar pattern in a simulation, memorized it, and in the moment that it mattered, he was right. They will call him "the steely-eyed missile man" in the future, I think. He earned it today.</p>

<p>Pete Conrad, for his part, seems unfazed. The mission transcript shows him conducting the malfunction procedures with what sounds like professional efficiency and maybe just a hint of "well, that was something." He is exactly the kind of man you want in command of a spacecraft that just got hit by lightning.</p>

<p>Three men are on their way to the Moon. Again. For the second time. The second time! It\'s extraordinary and I don\'t want to take it for granted. But I also think about how close this came to ending very differently. Lightning. Twice. Thirty-six seconds in.</p>

<p>The space program is a series of near-catastrophes that were caught in time. That\'s not entirely reassuring. But it\'s also a tribute to the preparation — to the young engineers who stay late studying simulation data, who memorize obscure switch positions, who are ready when it matters. John Aaron was ready today. The mission continues because he was ready.</p>',
];

$posts[] = [
    'date'     => '1969-11-19',
    'title'    => 'Whoopee — Pete Conrad Steps on the Moon',
    'category' => 'Apollo 12',
    'tags'     => ['pete-conrad', 'apollo-12', 'landing', 'moonwalk', 'funny', 'humor', 'whoopee', 'ocean-of-storms', 'precision-landing'],
    'excerpt'  => 'Pete Conrad landed the LM within 200 meters of Surveyor 3 — a precision landing NASA could barely believe. Then he stepped onto the Moon and said exactly what he\'d bet a journalist he would say. "Whoopee! Man, that may have been a small one for Neil, but it\'s a long one for me." Yes, Pete. It was.',
    'content'  => '<p>Pete Conrad stepped onto the Moon today and said "Whoopee."</p>

<p>I mean that with complete admiration.</p>

<p>Let me explain. Months ago, an Italian journalist named Oriana Fallaci bet Conrad fifty dollars that he would have to say whatever scripted line NASA gave him when he stepped onto the surface. Conrad, who has never been confused for a man who follows scripts, made a counter-bet: he would say exactly whatever line he chose, and NASA couldn\'t stop him. He told Fallaci what he planned to say. She didn\'t believe he\'d actually say it.</p>

<p>When Conrad stepped off the lunar module ladder and put his boots in the regolith of the Ocean of Storms today, he said: "Whoopee! Man, that may have been a small one for Neil, but it\'s a long one for me!"</p>

<p>Conrad is five foot six. Armstrong is five foot eleven. The ladder rungs are spaced the same distance apart regardless of height.</p>

<p>I laughed out loud when the radio relayed this. Betty looked at me and I told her what he\'d said and she smiled in a way that said she found this both charming and slightly ridiculous. She\'s right on both counts. It\'s charming. It\'s slightly ridiculous. It\'s exactly Pete Conrad.</p>

<p>But here is the serious part: before Conrad stepped out, he and Alan Bean had landed the Lunar Module within 200 meters of Surveyor 3. This is a spacecraft that has been sitting in the Ocean of Storms since April 1967 — over two and a half years. It\'s a specific small object on a large planetary surface 240,000 miles away. And Conrad navigated to within 200 meters of it. For reference: during Apollo 11, Armstrong flew past his intended landing spot and landed some miles away because the computer was aimed at a boulder field. That was fine — it was a successful landing. But this is different. This is precision.</p>

<p>The plan is to walk to Surveyor 3 and retrieve pieces of it to bring back to Earth — specifically to see what three years in the lunar environment did to the metal, the glass, the foam. This will tell engineers things about how spacecraft materials survive long-term exposure to the Moon, which matters if we ever plan to stay longer.</p>

<p>There\'s also just something wonderful about visiting a spacecraft that was there before them. Surveyor 3 took photographs in 1967. It sat there while Mercury flew, while Gemini flew, while Apollo 1 burned on the pad, while we rebuilt and came back. It waited in the dust of the Ocean of Storms, and now Pete Conrad and Alan Bean are going to walk over to it and say hello.</p>

<p>That\'s two Moon landings in four months. Twelve men are on the Moon — wait, no. Four men have walked on the Moon. Armstrong and Aldrin. Now Conrad, and Bean is out there with him right now. Four men on the Moon so far. I\'m keeping a list.</p>

<p>Conrad reportedly will pay Fallaci the fifty dollars he owes her. He didn\'t win the bet. He\'s going to the Moon.He can afford to lose a bet.</p>',
];

$posts[] = [
    'date'     => '1969-11-24',
    'title'    => 'Apollo 12 Home — We\'re Getting Good at This',
    'category' => 'Apollo 12',
    'tags'     => ['apollo-12', 'splashdown', 'success', 'pete-conrad', 'alan-bean', 'surveyor-3', 'reflection'],
    'excerpt'  => 'Apollo 12 splashed down safely yesterday. Pete Conrad and Alan Bean walked the Moon twice, visited Surveyor 3, and brought home 75 pounds of samples. Dick Gordon flew solo in orbit. Six men have now walked on the Moon. I keep saying this to myself: six men have walked on the Moon.',
    'content'  => '<p>Apollo 12 splashed down in the Pacific yesterday. Conrad, Gordon, and Bean are home safe and healthy. The mission lasted ten days.</p>

<p>The ledger: Conrad and Bean conducted two moonwalks totaling nearly eight hours. They set up the ALSEP — the Apollo Lunar Surface Experiments Package — which will send seismic and other data back to Earth for years. They visited Surveyor 3 and brought back the camera and other pieces, which scientists will study in detail. They collected 75 pounds of lunar samples. Dick Gordon flew the Command Module alone in lunar orbit for 31.5 hours — one of the longest solo orbital flights in the program.</p>

<p>And the Moon landing itself: 200 meters from Surveyor 3. A precision landing that I don\'t think gets enough credit in the newspapers, which are focused on the walking and the talking. The navigation alone is remarkable. You are going to land on the surface of another world, at night for the target spacecraft because the Sun is at the right angle only at certain times, within 200 meters of a specific three-legged tripod. And you did it.</p>

<p>Six men have walked on the Moon. Armstrong. Aldrin. Conrad. Bean. I say this several times a day because it still doesn\'t feel real. Six people — six human beings — have stood on another world. Six sets of footprints in the regolith of the Moon. Six people who know, from direct personal experience, what it is like to be somewhere other than Earth.</p>

<p>What I keep thinking about: we are twelve weeks past the first landing and we have already done it twice. The second mission was harder in some ways (precision landing) and involved more science than the first. The program is learning. The program is building on itself. Each mission makes the next one more capable.</p>

<p>There are more missions coming. I\'ve been reading about Apollo 13 — Fra Mauro, the fractured highland area formed by ejecta from the Mare Imbrium impact. Jim Lovell is going back. He was on Apollo 8 around the Moon. This time he gets to land. Or tries to. Everything has to work first.</p>

<p>But I\'m getting ahead of myself. For now: six men have walked on the Moon. Two successful landings. One program that seems, against all odds and through all difficulties, to be working.</p>

<p>I walked outside last night. It\'s cold now — November. The Moon was up, almost full, bright in the winter sky. Somewhere in that light — not the light of the Moon itself, which is just reflected sunlight, but that direction, that bearing — Pete Conrad said "Whoopee."</p>

<p>I am very glad he did.</p>',
];

// ============================================================
// APOLLO 13
// ============================================================

$posts[] = [
    'date'     => '1970-04-11',
    'title'    => 'Apollo 13 Launches Without Much Fanfare',
    'category' => 'Apollo 13',
    'tags'     => ['apollo-13', 'launch', 'jim-lovell', 'fred-haise', 'jack-swigert', 'fra-mauro', 'saturn-v'],
    'excerpt'  => 'Apollo 13 launched today and the newspapers barely mentioned it. "Routine Moon mission," one headline said. Routine! I watched from home and felt obscurely offended on behalf of the crew. Three men are riding a Saturn V to another world. Nothing about this is routine. We\'ve forgotten how hard this is.',
    'content'  => '<p>Apollo 13 launched today. Jim Lovell, Jack Swigert, and Fred Haise are on their way to the Moon. Destination: Fra Mauro, the highland region formed by material ejected when the Mare Imbrium basin was created by an ancient impact. A geologically important site. The astronauts have been trained intensively in geology for this mission.</p>

<p>The launch went smoothly. The Saturn V performed perfectly — or nearly so; there was a center engine cutoff in the second stage caused by pogo oscillations, about two minutes early, but the other four engines compensated and they reached the right orbit. This is the kind of thing that would have been headline news in 1961. Today it\'s a footnote.</p>

<p>Here is the thing I can\'t stop thinking about: one of the newspapers this morning called this a "routine Moon mission." Routine. Moon. Mission. I read that headline and I had to set the paper down for a moment.</p>

<p>Three men are riding a 363-foot rocket to the Moon. The rocket burns 20 tons of propellant per second. The spacecraft will coast for three days through 240,000 miles of vacuum. They will descend in a machine that cannot be tested before it has to work. They will depend on a single engine to lift them off the surface and rendezvous with the orbiting Command Module. And someone called this routine.</p>

<p>I understand how it happened. Six months since the first landing. Two successful missions. The technology works. The program is functioning. And so we forget what the program actually is, which is human beings going to another world in a machine of extraordinary complexity and fragility and risk.</p>

<p>I\'m being curmudgeonly. I know. But I don\'t want to forget how hard this is. I don\'t want to be the person who watched the first Moon landing and then two missions later decided it was routine.</p>

<p>A note about the crew: Jack Swigert is a late substitution. The original Command Module pilot was Ken Mattingly, but the prime crew was exposed to rubella (German measles) and Mattingly has no immunity. NASA pulled him off the mission two days before launch and put Swigert in. Mattingly never got rubella — he\'s fine — but mission rules are mission rules. Swigert was the backup Command Module pilot and he\'s been training for exactly this situation. He\'s ready. But it\'s still an unusual thing, changing a crew member that late.</p>

<p>Jim Lovell is the most experienced astronaut alive. Four spaceflights. Gemini 7 (14 days in orbit), Gemini 12, Apollo 8 (first lunar orbit), and now Apollo 13. He has been to the Moon once. Now he\'s going to land there. He has waited a long time for this.</p>

<p>I hope it goes well. I\'m going to be following this closely. Not because I expect anything to go wrong. But because I refuse to watch a Moon mission with the assumption that it\'s routine.</p>

<p>Nothing about this is routine. Nothing about it ever should be.</p>',
];

$posts[] = [
    'date'     => '1970-04-13',
    'title'    => 'Houston, We\'ve Had a Problem',
    'category' => 'Apollo 13',
    'tags'     => ['apollo-13', 'explosion', 'oxygen-tank', 'accident', 'what-went-wrong', 'jim-lovell', 'scary-moment', 'crisis'],
    'excerpt'  => 'Something went very wrong on Apollo 13 tonight. An oxygen tank exploded 200,000 miles from Earth. Two of the three fuel cells are dead. The service module is venting into space. Three men are in a crippled spacecraft on the way to the Moon and nobody knows yet if they can get home. I can\'t sleep.',
    'content'  => '<p>I heard it on the radio at 9:08 in the evening. I had just sat down after dinner. The announcer came on with a bulletin: something had happened on Apollo 13. An explosion. The spacecraft was damaged. Mission Control was assessing.</p>

<p>I turned up the radio and stayed there.</p>

<p>The details came out slowly, the way they always do in a real emergency when nobody knows exactly what happened yet. What I could piece together: at 55 hours and 54 minutes into the mission — about 200,000 miles from Earth — an oxygen tank in the Service Module exploded. The explosion damaged the Service Module, venting oxygen into space. Two of the three fuel cells — which power the Command Module by combining hydrogen and oxygen — were dead, their supply of oxygen gone with the tank. The remaining oxygen was venting as well.</p>

<p>Jim Lovell looked out his window and said later: "We are venting something out into space." It was oxygen. The spacecraft\'s life support was bleeding away into the vacuum.</p>

<p>His first transmission to Mission Control was the sentence that everyone will remember: "Houston, we\'ve had a problem here." Past tense. They\'ve had a problem. He said it calmly and precisely, the way you describe something after it happened, not while it\'s still happening. Except it was absolutely still happening. The problem was ongoing and worsening and nobody yet knew how bad it would get.</p>

<p>I am writing this at midnight. The radio is on next to me. Betty asked me to come to bed. I told her I couldn\'t. She understood. She went to bed. I\'m in the kitchen with the radio, and every fifteen minutes or so there\'s a new update, and each update tells me something a little more specific about how bad the situation is.</p>

<p>Three men are 200,000 miles from Earth in a spacecraft that has lost most of its power and oxygen supply. The Command Module has perhaps 15 minutes of power remaining in the batteries if they run everything at full. The Moon landing is obviously cancelled. The question — the only question that matters right now — is whether they can get home.</p>

<p>Mission Control is working on it. They\'re always working on something — that\'s what they do. But this is different from a thruster problem or a navigation update. This is the kind of problem where if they get it wrong, Jim Lovell and Jack Swigert and Fred Haise don\'t come home.</p>

<p>The radio announcer is saying that Mission Control is considering having the crew move into the Lunar Module — using it as a lifeboat. The LM has its own oxygen, its own power. It was designed for two men for two days. There are three men and they need four days to get home. The math is hard. But it might be the only option.</p>

<p>I put down my coffee and looked at my hands for a while. Then I got up and stood in the kitchen window and looked at the night sky. Clear tonight. The Moon is up.</p>

<p>Somewhere out there, past the Moon, three men are figuring out if they can survive in a spacecraft that just blew up underneath them.</p>

<p>I\'m going to stay by the radio tonight.</p>',
];

$posts[] = [
    'date'     => '1970-04-14',
    'title'    => 'Day Two — The Lifeboat',
    'category' => 'Apollo 13',
    'tags'     => ['apollo-13', 'lifeboat', 'lunar-module', 'aquarius', 'survival', 'mission-control', 'improvisation', 'fred-haise', 'jim-lovell'],
    'excerpt'  => 'The crew of Apollo 13 has moved into the Lunar Module Aquarius. It\'s a lifeboat. Designed for two men, two days. Three men, four days. Mission Control is rewriting every procedure in real time. I called in sick to work. I cannot leave the radio.',
    'content'  => '<p>It\'s Tuesday now. I called in sick to work. I told my boss there was a family situation. There is, in a sense — the crew of Apollo 13 is my family the way that every person in this country has watched these men and come to think of them as something like that.</p>

<p>The plan: Lovell, Swigert, and Haise have moved into the Lunar Module Aquarius. The Command Module Odyssey has been powered down — almost completely dark and cold — to preserve its battery power for reentry. When they get close to Earth, they\'ll need those batteries to power up the command module for splashdown. That\'s days away. Until then, three men live in Aquarius.</p>

<p>Aquarius was designed for two men for two days. There are three men and they need four days to get home. The power budget is extremely tight — they\'ve calculated every amp-hour they have and every amp-hour they need and they have to cut everything to the bone. One light on at a time. No unnecessary equipment. The temperature in the spacecraft will drop toward freezing. They\'ll be cold. They\'ll be uncomfortable. They\'ll be alive, if everything works.</p>

<p>The route home: they\'ve passed the Moon now — they went around the far side of the Moon and used the LM descent engine to put them on a faster return trajectory. The crew won\'t land on the Moon. They won\'t orbit it. They slingshot around it, used the Moon\'s gravity to redirect their path back toward Earth, and now they\'re on the long way home.</p>

<p>I\'ve been listening to Mission Control communications on the radio, and I want to try to convey what I\'m hearing. The flight controllers sound exhausted. They\'ve been there all night. But they\'re not panicking. They\'re working problems one at a time, in methodical order, the way you work through a checklist. They identify a problem. They find the people who know that system best. They work out a solution. They verify it on a simulator on the ground. They send it up to the crew. The crew does it.</p>

<p>Problem by problem by problem. That\'s how you get three men home from a spacecraft that blew up 200,000 miles away.</p>

<p>My kids know something is happening. They came home from school and saw me at the kitchen table with the radio and my notebook, where I\'ve been writing down times and updates. My daughter sat down and asked me what was going to happen. I told her I didn\'t know. That the people at Mission Control were very smart and very prepared and were doing everything possible. She nodded and went to start her homework, but she kept coming back to the kitchen. I think she wanted to be near the radio too.</p>

<p>Betty made soup for dinner. I barely tasted it. She sat with me for a while. She said: "They\'re going to make it, aren\'t they?" And I said I thought so. I hope so. I think so. I don\'t know.</p>

<p>There are still three days to go.</p>',
];

$posts[] = [
    'date'     => '1970-04-14',
    'title'    => 'The Carbon Dioxide Problem',
    'category' => 'Apollo 13',
    'tags'     => ['apollo-13', 'co2', 'carbon-dioxide', 'scrubber', 'improvisation', 'mission-control', 'mailbox', 'ingenuity'],
    'excerpt'  => 'Mission Control engineers spent hours designing a way to make square carbon dioxide scrubber cartridges fit round holes, using only materials available on the spacecraft: cardboard, plastic bags, and tape. They called it the "mailbox." It worked. This is what saves people\'s lives: someone who knows enough to improvise.',
    'content'  => '<p>I need to write down this particular story because I think it\'s the one that will stay with me longest from this whole ordeal.</p>

<p>The Lunar Module Aquarius uses a specific type of CO2 scrubber cartridge to remove carbon dioxide from the air the crew breathes. If CO2 builds up to a high enough level, the crew will lose consciousness and die. Simple as that. The LM\'s scrubbers are designed for two men for two days. With three men, the cartridges fill up faster.</p>

<p>The Command Module had extra CO2 scrubber cartridges. Plenty of them. But the Command Module uses a different size: square cartridges rather than round. The Lunar Module\'s scrubber accepts round cartridges. Square peg, round hole. Literally.</p>

<p>The CO2 levels in Aquarius were rising. Mission Control knew what was aboard the spacecraft — every single item that was packed and stowed, on both vehicles, is documented. They knew they had plenty of the wrong size cartridges and insufficient quantities of the right size. And they had to solve this problem using only materials that the crew had access to, in a spacecraft, with three increasingly cold and tired and stressed men waiting for the answer.</p>

<p>A team of engineers in Houston — I keep reading about "the engineers in the back room" and I keep trying to imagine what that room looked like — took out their own copies of the spacecraft manifest and began pulling objects off the list. What do they have? They have cardboard from the flight plan covers. They have lithium hydroxide cartridges (the square ones). They have plastic bags. They have tape. They have socks. They have a pressure suit hose.</p>

<p>Using these materials, they constructed an adapter that made the square cartridges functional in the round holes. A series of cardboard ducts and taped connections that routed air through the square cartridges from the round opening. They built a physical model of it in Houston, tested it, confirmed it worked, then read the instructions to the crew over the radio — step by step, in the right order, using the right objects from the manifest.</p>

<p>The crew built it. The CO2 levels dropped.</p>

<p>They called it the "mailbox," because the finished device looked a little like one. A mailbox made of cardboard and tape and desperation, 200,000 miles from Earth, keeping three men alive.</p>

<p>I told my daughter about this tonight. About the square cartridges and the round holes and the engineers with the manifest and the mailbox. She\'s been studying science in school, and she listened to the whole story without saying anything. Then she said: "So they improvised." And I said yes. They improvised using what they had, and it worked, and three men will keep breathing because of it.</p>

<p>She said: "That\'s what science is."</p>

<p>Yes. That\'s exactly what science is. You know enough to understand the problem. You know enough to find a solution from available materials. You test it. You implement it. You verify it worked. And three men keep breathing in the dark.</p>

<p>Two more days to go. Come home, gentlemen.</p>',
];

$posts[] = [
    'date'     => '1970-04-15',
    'title'    => 'Day Three — Cold and Dark',
    'category' => 'Apollo 13',
    'tags'     => ['apollo-13', 'cold', 'power', 'dark', 'aquarius', 'survival', 'jim-lovell', 'scary-moment', 'endurance'],
    'excerpt'  => 'The temperature inside Apollo 13 is down to 38 degrees Fahrenheit. The crew cannot sleep properly. They\'re dehydrated — rationing water. They\'re running on fumes and determination and the people at Mission Control who will not give up on them. One more day.',
    'content'  => '<p>Wednesday. Day three since the explosion.</p>

<p>The radio reports say the temperature inside the spacecraft has dropped to 38 degrees Fahrenheit. Thirty-eight. That\'s just above freezing. The crew is wearing their suits for warmth, which isn\'t easy in the cramped confines of the LM. There\'s condensation on every surface — water droplets forming on the walls, the instruments, everything cold and metallic and covered in moisture that will have to be dealt with during reentry when they power back up the Command Module and all that condensed water runs into the electrical panels.</p>

<p>They\'re also dehydrating. Water on the spacecraft has to be rationed — the fuel cells that normally produce water as a byproduct are dead, and the supply they have is limited. The crew is on strict water rations. Lovell is reportedly losing significant weight. The human body needs water and these men are not getting enough.</p>

<p>I can barely read these reports. I keep trying to translate them into the physical reality. Thirty-eight degrees. That\'s cold enough to be genuinely miserable. That\'s cold enough to make every task harder than it should be. And these men are trying to keep track of procedures and systems and checklists and communication protocols, while being cold and thirsty and tired, with the knowledge that a single error in the reentry procedures could kill them.</p>

<p>The navigation is also something I\'ve been trying to understand. Without the inertial navigation platform working normally, Lovell navigated the PC+2 burn — the engine burn to speed up the return trajectory — using visual star sightings. He looked out the window and identified stars and used them to verify the spacecraft\'s orientation. An ancient technique, essentially, adapted for the twentieth century. He was doing celestial navigation from a spacecraft in the middle of the return from the Moon.</p>

<p>My neighbor Harold came over this morning. He stood on my porch and I came out and we stood together. He didn\'t say anything for a while. Then he said: "I hope they make it." I said: me too, Harold. Me too.</p>

<p>One more day of this. Tomorrow they power up the Command Module for the first time in four days. They jettison the Service Module — first look at the damage. Then jettison the Lunar Module that saved their lives. Then reentry. Then either they come home or they don\'t.</p>

<p>My family is going to watch the news coverage together tomorrow. All of us. Whatever time it is. Betty said she\'ll make coffee and we\'ll watch through reentry. I think the whole country will be watching.</p>

<p>Come home, Jim. Come home, Fred. Come home, Jack.</p>',
];

$posts[] = [
    'date'     => '1970-04-17',
    'title'    => 'They\'re Home',
    'category' => 'Apollo 13',
    'tags'     => ['apollo-13', 'splashdown', 'survival', 'relief', 'home', 'jim-lovell', 'fred-haise', 'jack-swigert', 'aquarius', 'recovery'],
    'excerpt'  => 'Apollo 13 splashed down in the Pacific today. Three parachutes. Three men alive. Jim Lovell, Jack Swigert, and Fred Haise are home. When the parachutes deployed and the capsule hit the water, Betty cried. I wasn\'t far behind. Six days of this. They made it.',
    'content'  => '<p>They\'re home.</p>

<p>I need to say that first before anything else. Jim Lovell, Jack Swigert, and Fred Haise splashed down in the Pacific Ocean this afternoon at 1:07 PM Eastern. The Command Module Odyssey — cold and dark for four days, powered up on flingers and prayer and the extraordinary competence of the Mission Control team — descended under three parachutes into the South Pacific recovery zone. The USS Iwo Jima was waiting.</p>

<p>When the three parachutes deployed on the television screen — and oh, the moment when you could see all three fully inflated, three orange and white canopies above that conical capsule — Betty made a sound that I will never forget. It wasn\'t a word. It was just relief, compressed into a sound. I had been holding my shoulders up around my ears for six days, I think, without realizing it, and when those parachutes deployed they came down.</p>

<p>The capsule hit the water. The recovery helicopters were overhead almost immediately. The swimmers were in the water. The hatch opened. Three men came out.</p>

<p>Three men came out. They are alive. They went to the Moon in a spacecraft that exploded two-thirds of the way there. They survived for four days in a lifeboat that wasn\'t designed for them. They navigated using stars, improvised a carbon dioxide scrubber from cardboard and tape, breathed rationed air, drank rationed water, shivered in 38-degree temperatures, and came home.</p>

<p>Let me tell you what I know about what made this possible:</p>

<p>The crew. Lovell made decisions clearly under extreme pressure. Swigert powered up the Command Module using a checklist written from scratch in Houston and transmitted to them in the field — a checklist that normally takes months to prepare, and they had hours. Haise managed the Lunar Module systems with precise attention. All three men stayed focused on procedures when they had every reason to panic.</p>

<p>Mission Control. The flight controllers, who worked rotating shifts without meaningful rest for six days. The engineers in the back rooms who solved the CO2 problem, who wrote the power-up checklist, who calculated every possible trajectory and contingency. The Flight Directors — Gene Kranz and Glynn Lunney and the others — who maintained calm in the front room and communicated it to everyone around them.</p>

<p>The Lunar Module. Grumman built it, and it worked as a lifeboat for four days when it was never designed to do that. The descent engine fired. The systems ran. The LM Aquarius earned its name.</p>

<p>Lovell reportedly said, when asked about the mission afterward, that it was a "successful failure." They didn\'t land on the Moon. They didn\'t complete their objectives. But they came home alive, and coming home alive is the only objective that matters when your spacecraft blows up.</p>

<p>My daughter asked me tonight: did NASA fail? And I said no. I said: the hardware had a flaw that no one caught in time, and that\'s a failure of a kind. But the response — the improvisation, the problem-solving, the refusal to give up on three men in an impossible situation — that was not a failure. That was the opposite of failure.</p>

<p>I went outside after dinner and looked up. Cold spring sky. The Moon was there, pale and high. The same Moon that Aquarius flew around. The same Moon that watched three men figure out how to stay alive.</p>

<p>I was angry at the beginning of this week that the newspapers called Apollo 13 a "routine Moon mission."</p>

<p>Nothing about it turned out to be routine.</p>',
];

$posts[] = [
    'date'     => '1970-04-20',
    'title'    => 'The People Who Brought Them Home',
    'category' => 'Apollo 13',
    'tags'     => ['apollo-13', 'mission-control', 'gene-kranz', 'flight-directors', 'engineers', 'heroes', 'teamwork', 'nasa'],
    'excerpt'  => 'Gene Kranz said "failure is not an option" — or something like it. I don\'t know his exact words, but I know what the White Team did for six days straight. Mission Control brought three men home from a crippled spacecraft 200,000 miles away. They are the unsung heroes of this program, and I want to say their names.',
    'content'  => '<p>I want to write about the people in Mission Control, because I think in the chaos and relief of the past week, their role doesn\'t get said clearly enough.</p>

<p>The astronauts are the ones in the spacecraft. They\'re the ones we know by name, the ones who get the ticker-tape parades. And they deserve every bit of the recognition they receive. But over the past six days, watching what unfolded, I have been struck by something I keep coming back to: the people in the rooms in Houston are extraordinary.</p>

<p>Gene Kranz is the Flight Director I keep reading about. He led the White Team — one of several teams of flight controllers who rotated shifts around the clock. Kranz is a former Air Force pilot, a precise and demanding man by all accounts. He is known for wearing a vest during missions — his wife makes them, I\'ve read. The vests have become something like a good luck charm, or a reminder. He wore a white one during Apollo 11. I don\'t know what he wore this week. But I know his team was there.</p>

<p>There\'s a story going around — I don\'t know if it\'s exactly true — that after the explosion, Kranz gathered his team and said: "We\'ve never lost an American in space, we\'re sure as hell not going to lose one on my watch." That\'s the spirit I\'m talking about. Not false confidence — nobody in that room thought this was easy. But refusal to accept defeat before you\'ve tried everything.</p>

<p>The controllers: there are dozens of them. EECOM (electrical), FIDO (flight dynamics), GUIDO (guidance), TELMU (LM systems), and on and on. Each controller is a specialist. Each one knows their system — their specific set of parameters, their specific set of possible failures — as well as anyone alive. They\'re young, most of them. People in their twenties and thirties. Engineers who studied and trained and practiced until they could recite failure modes from memory.</p>

<p>The engineers in the back room who designed the mailbox. I think about those men (and I assume they were mostly men, in 1970) sitting at a table in Houston with a list of everything aboard the spacecraft, working backward from a problem to a solution. "We have cardboard. We have tape. We have socks. What can we build?" That\'s engineering. That\'s the applied version of knowing things.</p>

<p>The simulator teams: every procedure that went up to the crew was first tested on the spacecraft simulator in Houston. You don\'t send an untested procedure to men in a crippled spacecraft in deep space. You verify it works on the ground first. The simulator teams worked around the clock testing procedures before they could be transmitted. Every extra hour that took was an hour the crew was still safe. Every procedure that failed in the simulator was a procedure that didn\'t get sent up.</p>

<p>John Young and Ken Mattingly — the backup crew — worked the simulators almost continuously, checking procedures. Mattingly, who was pulled from the mission two days before launch because of the rubella scare (he never got rubella, by the way), spent the entire crisis working the power-up checklist for reentry in the simulator. He worked it over and over until he had confirmed it could work. His checklist is what got them home. He never went on this mission. He helped save it from the ground.</p>

<p>There are 400,000 people who worked on the Apollo program — designers, engineers, contractors, technicians, managers. Most of them will never be famous. They were there. They did the work. And when three men were stranded 200,000 miles from home in a crippled spacecraft, the best of those 400,000 people came through.</p>

<p>This is what human capability looks like when it\'s pointed at the right problem.</p>',
];

// ============================================================
// APOLLO 14
// ============================================================

$posts[] = [
    'date'     => '1971-02-05',
    'title'    => 'Alan Shepard Comes Back',
    'category' => 'Apollo 14',
    'tags'     => ['alan-shepard', 'apollo-14', 'landing', 'fra-mauro', 'edgar-mitchell', 'first-american-in-space', 'return'],
    'excerpt'  => 'Alan Shepard landed on the Moon today. The first American in space — Freedom 7, fifteen minutes, May 1961 — landed on another world at Fra Mauro. He is forty-seven years old. He waited ten years for this. His first words on the surface: "It\'s been a long way, but we\'re here."',
    'content'  => '<p>In May 1961, I watched Alan Shepard ride a Redstone rocket into space for fifteen minutes on a television in a department store window. He was the first American in space. He was thirty-seven years old.</p>

<p>Today, Alan Shepard landed on the Moon. He is forty-seven. It took ten years to get him there, and most of that time he was grounded — an inner ear condition called Ménière\'s disease kept him out of the cockpit and off the flight roster for most of the 1960s. He managed the astronaut office, he trained others, he watched his colleagues fly while he stayed on the ground. Then surgery corrected the condition, and he was cleared to fly again, and he lobbied for a command.</p>

<p>He got Apollo 14.</p>

<p>The landing in the Fra Mauro region went smoothly. Shepard is the commander; Ed Mitchell is the Lunar Module Pilot; Stuart Roosa is orbiting above in the Command Module. Shepard and Mitchell landed the Lunar Module in a region that the original Apollo 13 crew was supposed to have explored. Lovell and Haise never got there. Shepard and Mitchell made it for them.</p>

<p>His first words on the lunar surface were not as choreographed as they might have been. He looked around and said: "It\'s been a long way, but we\'re here." That\'s it. That\'s ten years and a medical grounding and surgery and the patience of a man who watched everyone else go first while he waited, and he put it all into six words: It\'s been a long way, but we\'re here.</p>

<p>He is forty-seven years old. He is the oldest person to walk on the Moon. I think he will always be the oldest person to walk on the Moon in this program.</p>

<p>I have been following Alan Shepard since that day in front of Caldwell\'s department store in 1961. The television in the window. The crowd on the sidewalk. Fifteen minutes. The first American in space. And now he\'s on the Moon. In between: Mercury, a medical grounding, administrative work, surgery, long waiting, and Apollo 14. Ten years, from orbit to the Moon.</p>

<p>Ten years ago, the Moon landing was a presidential promise that many people thought was impossible. Today it happened for the third time, and the man who started it all — the first American to go to space — is standing in the Fra Mauro highland region in a spacesuit, looking at Earth hanging in the black sky, ten years later.</p>

<p>It\'s been a long way. But he\'s there.</p>',
];

$posts[] = [
    'date'     => '1971-02-06',
    'title'    => 'Alan Shepard Plays Golf on the Moon',
    'category' => 'Apollo 14',
    'tags'     => ['apollo-14', 'golf', 'alan-shepard', 'funny', 'humor', 'moonwalk', 'one-handed-swing'],
    'excerpt'  => 'At the end of the second moonwalk, Alan Shepard pulled a makeshift 6-iron head from his suit pocket, attached it to a sample-collection rod, and hit two golf balls on the Moon. He shanked the first one. He caught the second one clean. "Miles and miles," he said. I laughed until I cried.',
    'content'  => '<p>I have been smiling since this afternoon and I keep laughing when I think about it and I\'m not entirely sure I can explain why this matters as much as it does to me.</p>

<p>At the end of the second moonwalk today — after Shepard and Mitchell had set up experiments and collected samples and spent the EVA doing serious work — Alan Shepard reached into the side pocket of his spacesuit and pulled out a Wilson Staff 6-iron clubhead. He had smuggled it aboard the spacecraft.</p>

<p>He attached it to the handle of a geological sample collection tool — a long rod that the crew uses to pick up rock samples — which gave him something like a one-iron. Then he set a golf ball on the surface.</p>

<p>He swung. One-handed, because the spacesuit doesn\'t give you full arm range of motion, especially in a pressurized suit. The ball went, maybe, 40 yards. He shanked it a little. "There it goes," he said. "Miles and miles and miles." (Not quite miles.)</p>

<p>Then he placed the second ball. He swung again. This time he caught it clean — as clean as you can with one hand and a spacesuit on. The ball flew out of frame on the television camera and he said: "Miles and miles."</p>

<p>I know this is silly. I know this is a man using Moon time — expensive Moon time, the limited hours of a moonwalk — to hit golf balls. The first golf played on another world.</p>

<p>But here is what I think about when I laugh at this: Alan Shepard has been waiting ten years to get back into space. He was grounded. He had surgery. He managed the astronaut office while other men flew the missions he\'d trained for. He did everything right and was still patient about the unfairness of it. And now, at forty-seven, on the Moon, he hit a golf ball because he could, because nobody was going to stop him, because he had earned whatever small absurdity he chose to commit.</p>

<p>The Moon is a place where people can play golf now. Not just stand in solemn wonder. Play golf. Hit a ball and say "miles and miles" and laugh. And that — that lightness, that refusal to let the wonder become entirely solemn — seems exactly right to me. Life is wonderful and sometimes ridiculous and both of those things are true at once.</p>

<p>Shepard is going home tomorrow. He\'ll leave his golf balls in the Fra Mauro highlands. Millions of years from now, if anyone ever digs through the accumulated regolith, they\'ll find a Wilson Staff golf ball, slightly pocked by micrometeorite impacts, and they\'ll have to figure out what it is.</p>

<p>I\'m still smiling. I think I\'ll be smiling about this for a long time.</p>',
];

$posts[] = [
    'date'     => '1971-02-09',
    'title'    => 'Apollo 14 Home — Eight Men on the Moon',
    'category' => 'Apollo 14',
    'tags'     => ['apollo-14', 'splashdown', 'success', 'eight-men', 'moon', 'program', 'recovery'],
    'excerpt'  => 'Apollo 14 splashed down today. Eight men have now walked on the Moon. After Apollo 13, I needed this. After the near-disaster that shouldn\'t have been, the mission that recovered and continued, this feels like proof that the program is intact. Eight men. I keep counting them.',
    'content'  => '<p>Apollo 14 splashed down in the Pacific today. Shepard, Roosa, and Mitchell are home safely. The mission lasted nine days.</p>

<p>Eight men have walked on the Moon. Armstrong, Aldrin, Conrad, Bean, Shepard, Mitchell. Wait — that\'s six. The moonwalkers from Apollo 14 are Shepard and Mitchell. With Apollo 12\'s Conrad and Bean, and the Apollo 11 crew, that\'s six. Let me recount:</p>

<p>Apollo 11: Armstrong, Aldrin. Two men.<br>
Apollo 12: Conrad, Bean. Four total.<br>
Apollo 14: Shepard, Mitchell. Six total.</p>

<p>Six men. Not eight — I miscounted earlier, wrote this too fast. Six men have walked on the Moon. I\'m writing it down so I stop getting it wrong.</p>

<p>The Fra Mauro science will take months to analyze. The rocks they brought back — breccias, the fractured and re-welded rock formed by ancient impacts — will tell geologists about the conditions during the formation of the Mare Imbrium basin 3.8 billion years ago. Fra Mauro was the target because it sits on the ejecta blanket from that ancient impact. Every rock there is a record of something that happened early in the Moon\'s history.</p>

<p>Stuart Roosa, in the Command Module Kitty Hawk, carried hundreds of tree seeds from the US Forest Service — a kind of experiment, to see what happens to seeds that travel to the Moon. "Moon trees," they\'ll call them if the seeds germinate and grow after the mission. I find this charming. Apollo 14 went to the Moon and came back with tree seeds. Life trying to go everywhere it can.</p>

<p>I also want to say something about what this mission means coming after Apollo 13. Nine months ago, a spacecraft exploded 200,000 miles from Earth and we spent six days not knowing if three men would come home. They did. And then the program stopped for a while — longer than people expected — while they investigated what went wrong and what needed to be fixed. And now here we are: another mission, another landing, six men total on the Moon. The program survived. It kept going.</p>

<p>I don\'t want to be complacent about this. I don\'t want to say "we\'ve overcome everything." We haven\'t. There will be more problems. There always are. But today, watching the parachutes deploy and the capsule hit the water and the recovery swimmers doing their work, I felt something I needed to feel: the program is intact. We\'re still going. The decade\'s work is not finished.</p>

<p>Apollo 15 is coming. Longer missions now, with the Lunar Rover. A car on the Moon. There\'s still so much left to see.</p>',
];

// =============================================
// IMPORT FUNCTION
// =============================================

function get_or_create_tag_2( $name ) {
    $term = get_term_by( 'name', $name, 'post_tag' );
    if ( $term ) {
        return $term->term_id;
    }
    $result = wp_insert_term( $name, 'post_tag' );
    return is_wp_error( $result ) ? false : $result['term_id'];
}

function get_category_id_2( $name ) {
    $term = get_term_by( 'name', $name, 'category' );
    if ( $term ) {
        return $term->term_id;
    }
    $result = wp_insert_term( $name, 'category' );
    return is_wp_error( $result ) ? 1 : $result['term_id'];
}

global $wpdb;
$imported2 = 0;
$skipped2  = 0;

foreach ( $posts as $post_data ) {
    $exists = $wpdb->get_var( $wpdb->prepare(
        "SELECT ID FROM {$wpdb->posts} WHERE post_title = %s AND post_type = 'post' AND post_status != 'trash' LIMIT 1",
        $post_data['title']
    ) );
    if ( $exists ) {
        echo "SKIP (exists): {$post_data['title']}\n";
        $skipped2++;
        continue;
    }

    $cat_id = get_category_id_2( $post_data['category'] );

    $post_id = wp_insert_post( [
        'post_title'    => $post_data['title'],
        'post_content'  => $post_data['content'],
        'post_excerpt'  => $post_data['excerpt'],
        'post_date'     => $post_data['date'] . ' 10:00:00',
        'post_status'   => 'publish',
        'post_type'     => 'post',
        'post_author'   => 1,
        'post_category' => [ $cat_id ],
        'tags_input'    => $post_data['tags'],
    ] );

    if ( is_wp_error( $post_id ) ) {
        echo "ERROR: {$post_data['title']} — " . $post_id->get_error_message() . "\n";
    } else {
        wp_set_post_tags( $post_id, $post_data['tags'], false );
        echo "CREATED [{$post_id}]: {$post_data['title']} ({$post_data['date']})\n";
        $imported2++;
    }
}

echo "\n=== Import 2 complete: {$imported2} created, {$skipped2} skipped ===\n";
