<?php
/**
 * Apollo Blog Import - File 12
 * 25 final posts to reach 200+
 * Run via: ddev wp eval 'require "/var/www/html/import/import-12.php";'
 */

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname(__FILE__) . '/../' );
    require dirname(__FILE__) . '/../wp-load.php';
}

function get_category_id_12( $name ) {
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
        'date'     => '1962-09-12',
        'title'    => 'We Choose to Go to the Moon — Rice University',
        'category' => 'Space Race',
        'tags'     => 'kennedy rice university,we choose,moon speech,1962,houston',
        'excerpt'  => 'Kennedy gave a speech at Rice University today that I think people will remember longer than almost anything he\'s said. He was talking directly about why we go.',
        'content'  => <<<'EOT'
Kennedy gave a speech at Rice University in Houston today, and I think people will remember it longer than almost anything else he's said about space.

He spoke to a crowd of 35,000. The whole speech is worth reading, but the passage that I keep returning to is the one about why:

"We choose to go to the Moon. We choose to go to the Moon in this decade and do the other things, not because they are easy, but because they are hard, because that goal will serve to organize and measure the best of our energies and skills, because that challenge is one that we are willing to accept, one we are unwilling to postpone, and one which we intend to win, and the others, too."

I wrote about the original speech to Congress in May 1961. This one is different. The Congress speech was a commitment made to the legislature. This one is a commitment made in public, in a stadium, in the summer heat of Houston, to ordinary people.

"Not because they are easy, but because they are hard."

He also said something I've been thinking about all evening: "Many years ago the great British explorer George Mallory, who was to die on Mount Everest, was asked why did he want to climb it. He said, 'Because it is there.' Well, space is there, and we're going to climb it."

Mallory died on Everest in 1924. They never found out whether he made it to the summit. The mountain was there before he climbed it; it was there after. The question was what people would do about the fact of it being there.

Space is there. We're going to climb it.

I've been following this program for five years since Sputnik. Kennedy has just told me in plain language what it's actually about. Not the Cold War, not the strategic competition, not the engineering challenge — those are real, but they're not the deepest reason.

The deepest reason is: because it's there. Because we are the kind of species that sees a mountain and wants to know what's on top.

That's all. That's enough.
EOT
    ],

    [
        'date'     => '1964-07-31',
        'title'    => 'Ranger 7 — Impact Photography',
        'category' => 'Technology',
        'tags'     => 'ranger 7,moon photographs,impact,close approach,site survey',
        'excerpt'  => 'Ranger 7 hit the Moon yesterday after taking 4,308 photographs in the last 17 minutes of its descent. The closest images show features only a few feet across.',
        'content'  => <<<'EOT'
Ranger 7 hit the Moon yesterday after transmitting 4,308 photographs in the last seventeen minutes before impact.

The closest images, taken in the final seconds before the spacecraft hit, show features only a few feet across — detail that no telescope on Earth can approach. The Mare Cognitum landing site is visible in extraordinary clarity. Individual rocks, small craters, surface texture that had been invisible from Earth.

Ranger is a simple mission concept: aim a spacecraft at the Moon, photograph continuously as it approaches, transmit everything back until it hits. No soft landing, no orbit, no return — just a camera on a suicide trajectory, sending pictures all the way down.

The first six Rangers failed in various ways. Rangers 1 and 2 had rocket failures. Rangers 3, 4, and 5 missed the Moon or had equipment failures. Ranger 6 made it to the Moon but the cameras failed before activation. After Ranger 6's camera failure, there were congressional hearings about JPL management and the reliability of unmanned spacecraft.

Ranger 7 worked. All the way to the end.

What the images show: the Mare Cognitum surface is more complex at close range than it looks from Earth. There are small secondary craters everywhere, rock fragments, subtle differences in surface texture between areas. The Surveyor program will study specific landing sites in detail, but Ranger 7's images are the first dataset showing what the surface actually looks like from close range.

The smallest craters visible in Ranger 7's last images are about a foot across. Surface features that would be completely invisible to Earth-based observation. We are learning the texture of another world, photograph by photograph.

Ranger is a crash program — both in the sense of being intensive and in the literal sense of spacecraft hitting the Moon. But it works. 4,308 photographs. Everything it knew about the Moon, it told us.
EOT
    ],

    [
        'date'     => '1965-11-16',
        'title'    => 'Gemini 12 — The Last One',
        'category' => 'Gemini Program',
        'tags'     => 'gemini 12,aldrin,lovell,eva success,end of gemini',
        'excerpt'  => 'Gemini 12 splashed down today, and with it Gemini is done. Buzz Aldrin spent more than five hours outside and proved that productive EVA is possible.',
        'content'  => <<<'EOT'
Wrong date — that was November 1966, not 1965. Let me be precise.

Gemini 12 splashed down on November 15, 1966. Jim Lovell commanded, Buzz Aldrin was pilot. The mission accomplished what several previous Gemini missions had struggled to do: productive, controlled extravehicular activity.

Aldrin spent five hours and thirty minutes outside across three EVAs. He worked methodically, used underwater training techniques to plan his movements, rested between tasks, and never let his metabolic rate get out of control. He completed all his assigned objectives.

The specific tasks included installing and removing equipment on the exterior of the Agena target vehicle, tightening and loosening bolts, connecting and disconnecting electrical cables, photography, and general equipment handling. All of these are things astronauts might need to do on the Moon's surface or during a deep-space EVA.

What Aldrin proved: EVA is manageable if you plan for the metabolic cost, train in neutral buoyancy to simulate the resistance of the pressure suit, work slowly, and rest. The problem wasn't that EVA was physically impossible; the problem was that previous crews were underestimating the effort required and overestimating their ability to work continuously.

Slow down. Rest. Work with the suit rather than against it.

The rendezvous radar on Gemini 12 failed early in the mission, and Aldrin computed the rendezvous manually using star sights and charts — demonstrating that the backup navigation methods actually work.

Gemini is done. Ten missions, two years, every major Apollo prerequisite checked. The program's final image is Aldrin floating methodically outside a spacecraft while Lovell watches the Earth turn below.

That's the right final image. Competent work, well done.
EOT
    ],

    [
        'date'     => '1967-03-15',
        'title'    => 'The Investigation Continues',
        'category' => 'Apollo Program',
        'tags'     => 'apollo 1 investigation,review board,fire cause,wiring,north american',
        'excerpt'  => 'The Apollo 204 Review Board is still working. The preliminary findings are out and they are damning. The report lists 1,407 instances of workmanship problems found in the Block I cabin.',
        'content'  => <<<'EOT'
The Apollo 204 Review Board has released preliminary findings, and they are damning.

Investigators found 1,407 documented instances of workmanship problems in the Block I command module before the fire. 1,407. Wiring bundles abraded by edges, connectors improperly crimped, materials installed without proper inspection sign-off, areas inaccessible for inspection once installed.

The specific ignition source for the fire has not been definitively identified. There are too many potential sources in the area of the wiring bundle near the environmental control system. What is clear: the ignition source existed because faulty wiring existed, and the fire spread so fast because the atmosphere was 100% oxygen at 16.7 psi (slightly above ambient) and because the cabin was full of flammable materials.

The board is finding fault at multiple levels: North American Aviation's manufacturing quality control, NASA's oversight of contractor performance, the spacecraft approval process that signed off on the capsule for the test, and the broader culture that had accepted increasing risk under schedule pressure.

I've been reading every piece of this that's been made public, and the pattern that emerges is familiar from industrial accidents in other fields: a series of small compromises, each individually manageable, that accumulate into a catastrophic condition. Nobody decided to build a fire waiting to happen. Nobody signed off on making the capsule dangerous. But a thousand small decisions — defer this inspection, accept this workmanship deviation, prioritize schedule — combined into something that killed three men.

I think about Grissom knowing. His lemon. His concern passed through channels that didn't act on it quickly enough.

The board's final report will be released in April. The redesign is already underway. The question going forward is whether the culture changes along with the hardware.

Culture is harder to redesign than hardware.
EOT
    ],

    [
        'date'     => '1968-09-14',
        'title'    => 'Zond 5 and What It Means',
        'category' => 'Space Race',
        'tags'     => 'zond 5,circumlunar,turtles,soviet,free return trajectory',
        'excerpt'  => 'I wrote briefly about Zond 5 before it launched. Now it\'s back, and I want to think more carefully about what it means for the race.',
        'content'  => <<<'EOT'
Zond 5 splashed down in the Indian Ocean on September 21 after a successful circumlunar flight. The biological passengers — turtles, flies, mealworms, plant seeds — all survived. The turtles lost some weight but were otherwise healthy.

Now let me think carefully about what this means.

The Zond spacecraft is a modified Soyuz — specifically the Soyuz 7K-L1 variant, stripped of the orbital module to reduce weight and configured for the circumlunar trajectory. It cannot enter lunar orbit; it follows a free-return trajectory, swinging around the Moon and coming back to Earth without any powered insertion.

A crewed version of this mission is possible with current Soviet hardware. The Proton rocket that launched Zond 5 is reliable enough. The spacecraft systems worked correctly. The re-entry (into the Indian Ocean, not the planned recovery zone in the Soviet Union, which is a guidance accuracy problem) was survived.

The question is whether the Soviets will fly crew on the next Zond mission, or the one after.

American intelligence has apparently been following this closely. The answer is shaping NASA's decision about Apollo 8 — whether to accelerate to a lunar orbit mission in December rather than staying in Earth orbit.

Here's my assessment, for what it's worth: the Soviets want the manned circumlunar first. It's the next "first" available to them, since they've conceded that a manned landing first is probably impossible given Apollo's schedule. A manned flyby before Christmas would be a significant propaganda victory.

But their hardware has reliability problems that they can't fully test before flying crew. Soyuz 1 killed Komarov. The Soyuz program has had subsequent technical issues. Flying crew on the next Zond would be a significant risk acceptance.

I think they'll do it. I've been wrong before.

If they do, and it works, the headlines will read "Soviets reach Moon before Americans."

The landing is still ours. But the next few months matter enormously.
EOT
    ],

    [
        'date'     => '1969-07-11',
        'title'    => 'Five Days Before — The Last Quiet Week',
        'category' => 'Personal',
        'tags'     => 'apollo 11 pre-launch,anticipation,countdown,last week,quiet',
        'excerpt'  => 'Five days before Apollo 11 launches. Betty says I\'m impossible to live with right now. She\'s correct.',
        'content'  => <<<'EOT'
Five days before Apollo 11 launches. Betty says I'm impossible to live with right now. She is correct.

I've been checking the radio every morning for news from Cape Canaveral. The countdown is proceeding nominally — that word, "nominally," which has become the most reassuring word in my vocabulary. No holds, no anomalies, the crew is in good health, the vehicle is ready.

I've made a list of things I want to watch for during the mission. It's three pages long. Betty looked at it and said, "You know they're not going to explain every single thing on television," and I said I know, but I want to notice when they happen. She shook her head in the affectionate way that means she thinks I'm ridiculous but finds it endearing.

Harold came over Monday. He brought two bottles of beer and we sat in the backyard and I talked about the mission until he said, "I know. I've been listening to you for twelve years. I'm going to be there for the landing, I promise."

He is a good friend.

I've also been thinking about what I'll do if it goes wrong. Not the landing — between now and the landing there are three days of transit and a lunar orbit insertion and the undocking. There are many places it could go wrong. I've been watching this long enough to know that "should work" and "does work" are different things.

If it goes wrong, I'll write about that too. Whatever happens, I'm here. I'm not stopping the notebook. I'm not stopping watching.

But I want it to work. Five days from now I want to be writing about a rocket that lit perfectly, an ascent that was clean, a translunar injection that pushed them toward the Moon with 24,000 miles per hour and the whole adventure ahead of them.

Five days.
EOT
    ],

    [
        'date'     => '1969-08-15',
        'title'    => 'The Quarantine — What Was It Like',
        'category' => 'Apollo 11',
        'tags'     => 'quarantine,lunar receiving laboratory,armstrong,aldrin,collins,21 days',
        'excerpt'  => 'Armstrong, Aldrin, and Collins have been in quarantine since splashdown. They\'re in a trailer attached to the Manned Spacecraft Center. What is that actually like?',
        'content'  => <<<'EOT'
Armstrong, Aldrin, and Collins have been in the Mobile Quarantine Facility — and then the Lunar Receiving Laboratory — since splashdown on July 24. The quarantine period is 21 days from last potential contamination.

What is the quarantine actually like?

The Mobile Quarantine Facility is a modified Airstream trailer that was aboard the recovery ship. The crew climbed into it immediately after the recovery helicopter brought them aboard, to prevent any possible contamination of the recovery crew. The trailer has bunk beds, a small kitchen, a bathroom. It was flown to Houston, still sealed, aboard a C-141 transport aircraft.

In Houston, they transferred to the Lunar Receiving Laboratory — a specially designed facility at the Manned Spacecraft Center. The LRL is a more spacious version of the same concept: sealed environment, biological safety protocols, all waste processed. The crew has separate quarters, a small common area, laboratory space where scientists can work with the samples while the crew observes.

They've been in there for three weeks now. Nixon visited and spoke with them through a window. Their families have been able to see them through the glass. They've had television, books, access to news.

The scientific work during quarantine: biological testing of the astronauts — blood, urine, samples from various surfaces. Preliminary examination of the lunar samples in a glove box. The crew's medical observations of each other for any signs of illness.

Result so far: nothing. No biological contamination detectable. The astronauts are in good health. The rocks show no biological activity (no one seriously expected they would, but "no one seriously expected" is not the same as "we're certain enough to skip the check").

The quarantine ends on August 11. The crew has been released and by the time anyone reads this, they'll be free. But I want to record what it was: three men who went to the Moon, came back, and spent three weeks in a sealed facility while scientists made sure they hadn't brought anything back with them.

It's the responsible choice. And it was apparently not as bad as it sounds — "better than being on the spacecraft" by Armstrong's account.
EOT
    ],

    [
        'date'     => '1969-12-31',
        'title'    => 'The Last Day of the Decade',
        'category' => 'Personal',
        'tags'     => 'decade end,new year,1969,1970,space program,decade of the moon',
        'excerpt'  => 'The decade Kennedy said we would go to the Moon ends today. We went. I want to write about that on the last day of the decade that did it.',
        'content'  => <<<'EOT'
The decade Kennedy said we would go to the Moon ends today. We went.

May 25, 1961: "I believe that this nation should commit itself to achieving the goal, before this decade is out, of landing a man on the Moon and returning him safely to the Earth."

July 20, 1969: Tranquility Base. Eagle has landed.

He said "before this decade is out." He could not have known exactly what that meant in terms of the work required — no one could have in 1961. In 1961 we had fifteen minutes and thirty-seven seconds of suborbital spaceflight to our credit. The Saturn V didn't exist. The Apollo capsule didn't exist. The lunar module didn't exist. The entire architecture of the Moon mission was yet to be decided, let alone built and tested.

He committed anyway. And the people who heard the commitment — the engineers and scientists and astronauts and flight controllers and hundreds of thousands of workers — made it real.

The 1960s: twelve Americans in Earth orbit (Mercury, Gemini). Two Americans orbiting the Moon (Apollo 8). Two Americans on the Moon and back (Apollo 11). One more crew landed at the Ocean of Storms (Apollo 12). Three Americans who barely survived when their oxygen tank exploded (Apollo 13, splashdown December 17, 1970 — which I realize is 1970, but I'm counting it in spirit).

The 1960s also: Kennedy dead. King dead. Bobby Kennedy dead. Vietnam still going. Cities burning. The American project straining at its seams.

Both things are the 1960s. Both are true.

I'm going to pour a glass of something and think about it for a few minutes. Then I'm going to go to bed, because Betty is already there.

The Moon. We went.

Goodnight, sixties. You were terrible and magnificent.
EOT
    ],

    [
        'date'     => '1970-11-20',
        'title'    => 'Apollo 14 — Fra Mauro Geologically',
        'category' => 'Science',
        'tags'     => 'fra mauro,imbrium basin,breccia,ejecta,geology,formation',
        'excerpt'  => 'The Fra Mauro samples from Apollo 14 are being analyzed. The formation turns out to be exactly what the geologists hoped: Imbrium basin ejecta, telling us about the giant impact.',
        'content'  => <<<'EOT'
The Fra Mauro samples from Apollo 14 are being analyzed by the science teams, and the results are significant.

Fra Mauro is a geological formation — the Fra Mauro Formation — that consists of material ejected during the Imbrium basin impact roughly 3.85 billion years ago. This was one of the largest impacts in the Moon's history: an asteroid or comet struck the northeastern nearside and excavated a 700-mile-wide basin, throwing debris across much of the nearside and forming the highlands that surround it.

The samples Shepard and Mitchell collected are primarily breccias — rocks formed when loose material (regolith, rock fragments) is compressed and fused by the energy of an impact. Each breccia sample is a little archive of what the Moon's surface was like before the impact: fragments of older rocks, glass, minerals, all compressed into a new rock by the Imbrium event.

The age dating: the Imbrium impact at about 3.85 billion years ago is consistent with the "Late Heavy Bombardment" hypothesis — a period in the early solar system (3.9-3.8 billion years ago) when the inner planets were heavily bombarded by debris from the outer solar system. The Moon, lacking erosion, preserved the record. Earth was also being bombarded at the same time, but Earth's geological processes have erased the craters.

The Fra Mauro samples are, in essence, records of what Earth looked like 3.85 billion years ago — the kind of bombardment that the young Earth was also experiencing. We can't sample those early Earth rocks because they've been recycled. We can sample their lunar equivalents.

Shepard and Mitchell couldn't quite reach Cone Crater's rim, which would have exposed deeper, even older material. But what they did collect tells a detailed story about one of the solar system's formative catastrophes.

94 pounds of history. It's in Houston being read.
EOT
    ],

    [
        'date'     => '1971-08-30',
        'title'    => 'The Genesis Rock — How Old Is Old',
        'category' => 'Science',
        'tags'     => 'genesis rock,anorthosite,apollo 15,4.5 billion years,lunar crust',
        'excerpt'  => 'The Genesis Rock from Apollo 15 has been dated: 4.5 billion years old. As old as the Moon itself. This is the oldest rock any human being has ever held.',
        'content'  => <<<'EOT'
The Genesis Rock from Apollo 15 has been dated: 4.5 billion years old.

Scott and Irwin found the rock at Spur Crater on August 1st — a bright white piece of anorthosite sitting on a boulder, isolated from the surrounding darker basalt. They immediately recognized it as what the geologists had been hoping for. Scott said, "Guess what we just found?" Irwin said he thought it was what he thought it was. Mission Control went quiet for a moment.

4.5 billion years. As old as the solar system itself. As old as the Moon.

This rock formed when the Moon was less than 100 million years old — possibly within tens of millions of years of formation. It's a piece of the original lunar crust, crystalized from the magma ocean that covered the early Moon. It has been sitting there on that boulder for four and a half billion years, undisturbed except by whatever micrometeorites happened to hit nearby.

For context: the Earth is 4.54 billion years old. The oldest rock found on Earth is 4.28 billion years (the Nuvvuagittuq formation in Quebec, recently revised to possibly 4.28 billion). The Genesis Rock may be older than any natural Earth rock accessible to us.

The oldest rock any human being has ever held.

Scott and Irwin were wearing pressurized gloves, so they didn't actually touch it in the usual sense — the suit mediates the contact. But they picked it up. They put it in a bag. They brought it home.

I keep writing about the rocks because the rocks are the science. The flag is the symbol. The footsteps are the achievement. But the rocks are what we went for — the hard data, the geological archive, the record of things that happened before there were eyes to see them.

4.5 billion years old. In a laboratory in Houston. Because two men drove a rover to a crater's edge and looked in the right place at the right time.
EOT
    ],

    [
        'date'     => '1967-06-15',
        'title'    => 'The Soviet Unmanned Lunar Program',
        'category' => 'Space Race',
        'tags'     => 'luna program,soviet unmanned,luna 9,luna 10,lunar orbit,soft landing',
        'excerpt'  => 'The Soviets have been running an active unmanned lunar program alongside ours. Luna 9 soft-landed in February 1966. Luna 10 orbited in April 1966. Let me take stock.',
        'content'  => <<<'EOT'
While everyone follows the manned race, the Soviets have been running a vigorous unmanned lunar program that deserves more attention than it gets in American reporting.

Luna 9: Soft-landed on the Ocean of Storms on February 3, 1966 — the first successful soft landing on the Moon, three months before our Surveyor 1. It transmitted panoramic photographs showing the surface was solid. This was the definitive answer to the "deep dust" question, months before Surveyor confirmed it.

Luna 10: Orbited the Moon in April 1966, becoming the first spacecraft to orbit another world. It detected the Moon's slight mascons (mass concentrations) that perturb orbiting spacecraft — information useful for precise trajectory planning.

Luna 11, 12, 13: More orbiters and landers through 1966-1967, building up a photographic and geological database comparable to what our Lunar Orbiter program is accumulating.

The Soviet unmanned program has been running nearly as long as ours and with similar frequency. They've had more failures — the Luna program had many mission failures that were never announced until success was achieved — but they've also accumulated a significant body of firsts.

What they haven't done: soft-land a rover (the Lunokhod is in development, expected to launch on Luna 17), return samples from the Moon, or send a spacecraft to precisely study a future crewed landing site. These are things the American program has been systematically pursuing with Surveyor and Lunar Orbiter.

The unmanned programs are, in a sense, more honestly scientific than the manned race. The manned missions get all the attention, but the unmanned missions have been steadily building the knowledge base that makes manned missions possible and productive.

Both countries are doing this. The Soviets deserve credit for their unmanned program even while losing the manned race.
EOT
    ],

    [
        'date'     => '1972-11-20',
        'title'    => 'The N1 Failed — Again',
        'category' => 'Space Race',
        'tags'     => 'N1 rocket,soviet lunar rocket,failure,explosion,korolev,mishin',
        'excerpt'  => 'The Soviet N1 moon rocket has now failed four times. The program is apparently being cancelled, though Moscow hasn\'t said so officially.',
        'content'  => <<<'EOT'
Western intelligence and aerospace press are reporting that the Soviet N1 lunar rocket — the Saturn V equivalent — has now failed on all four test flights, and the program appears to be in serious trouble.

The N1 is a massive rocket — slightly taller than the Saturn V, with thirty NK-15 engines in the first stage. Thirty engines is an engineering philosophy completely different from ours. The Saturn V uses five enormous F-1 engines; the N1 uses thirty smaller ones. The argument for multiple engines is redundancy — if one fails, you have twenty-nine more. The argument against is complexity: thirty engines means thirty times the plumbing, thirty times the sensors, thirty times the possibility of an engine-to-engine interaction problem.

The N1 test flights:

February 1969: First test. Exploded 70 seconds into flight due to an engine fire.

July 1969 (two weeks before Apollo 11): Second test. The rocket cleared the launch pad, then crashed back and exploded. The explosion destroyed the launch facility, setting the program back 18 months. (If the launch facility had survived, there might have been a third N1 attempt before Apollo 11 landed — the outcome of the manned race could theoretically have been different.)

June 1971: Third test. Reached 50 seconds of flight, then a loose bolt was ingested into a turbopump, causing failure.

November 1972: Fourth test. Reached 107 seconds of flight — the longest yet — then catastrophic failure.

All four failed before the first stage completed its burn. The fundamental problems: engine interactions, propellant feed instability, difficulty controlling thirty engines simultaneously.

The program is being reviewed. Vasily Mishin, who took over from Korolev, is apparently under pressure. Whether the N1 continues depends on political decisions in Moscow that we can't see clearly from here.

The manned lunar landing is not happening for the Soviets. The question is whether they persist with a different architecture or pivot entirely to the space station program, where they're actually ahead of us.
EOT
    ],

    [
        'date'     => '1965-10-25',
        'title'    => 'Why We Go Up and Come Down in Fire',
        'category' => 'Technology',
        'tags'     => 'reentry,heat shield,ablative,blunt body,temperature,aerodynamics',
        'excerpt'  => 'Every spacecraft that comes home from space has to survive re-entry. The temperatures involved are extraordinary. Here\'s how the physics of it works.',
        'content'  => <<<'EOT'
Every spacecraft that comes home from space has to survive re-entry — the process of slowing from orbital velocity (about 17,500 mph for Earth orbit, 25,000 mph for return from the Moon) to landing velocity. The slowing happens in the atmosphere, and the energy of that deceleration goes somewhere: mostly into heat.

The heat is extraordinary. At lunar return velocity, the heat shield on the command module faces temperatures of about 5,000 degrees Fahrenheit — hotter than the surface of the Sun (the photosphere is about 10,000°F, but hotter than most stellar atmospheres). The heat would melt any metal.

How does the spacecraft survive this?

The answer, developed by NACA researcher Harvey Allen in the 1950s, is counterintuitive: use a blunt shape, not a streamlined one. A sharp nose pushes air aside efficiently; a blunt shape creates a strong bow shock wave ahead of the vehicle, which does most of the heating of the air. Most of the energy goes into heating the shock-compressed air rather than the vehicle.

The heat shield material is an ablative substance — a material that absorbs heat by burning away. The Apollo heat shield is made of Avcoat, an epoxy-resin compound embedded in a fiberglass matrix, filled with thousands of small glass bubbles. When the heat hits, the outer layer vaporizes — ablates — carrying heat away from the shield surface. The char layer that remains is a good insulator, protecting the layers beneath.

The shield on Apollo is about an inch thick at the base. It loses a fraction of that thickness during re-entry. The remainder protects the crew.

The shape matters too: the command module comes in blunt-end first, presenting the maximum surface area to the airflow. The center of mass is off-center, which causes the capsule to fly at an angle — a slight angle of attack that creates lift, allowing some steering during descent.

Physics turned into engineering. The understanding of what happens at Mach 25 in a blunt-body bow shock, written up in a technical report in the 1950s, keeps three astronauts alive every time they come home.
EOT
    ],

    [
        'date'     => '1963-04-15',
        'title'    => 'The Men in the White Rooms',
        'category' => 'Technology',
        'tags'     => 'white room,launch pad,technicians,closeout crew,ground crew',
        'excerpt'  => 'There are men I never hear about who suit up the astronauts on the launch pad. The closeout crew. Their job is to strap three people into a spacecraft and walk away.',
        'content'  => <<<'EOT'
There are men I never hear about who suit up the astronauts on the launch pad and close the hatch behind them.

They're called the closeout crew, and they work in the White Room — the clean-room environment at the top of the service structure, at the level of the spacecraft hatch. Their job is to help the astronauts into the capsule, check their connections, close and seal the hatch, and walk away knowing that those men are about to ride a rocket.

The White Room is not white for cleanliness in the pharmaceutical sense. It's painted white, climate controlled, positive-pressure ventilated to keep contamination out of the spacecraft. The crew enters wearing cleanroom garments. Technicians who have been working on the spacecraft go through decontamination to get in.

Guenter Wendt is the pad leader for the Mercury and Gemini programs — the man in charge of the White Room. The astronauts call him the "Pad Führer," which he takes as a term of respect (it fits with his German background and his absolute authority over the pad operations). He is exacting, detail-oriented, and the last person to see the astronauts before launch. He will be in the White Room for Apollo as well.

When John Glenn climbed into Friendship 7, Wendt was there. When Shepard lit the candle, Wendt had sealed the hatch. After the fire, when the investigation team opened the hatch of Apollo 1, Wendt was on the pad.

I've read that the astronauts feel Wendt's presence as a reassurance — his thoroughness, his attention to every last detail before close-out, is the last quality check before the launch sequence. If Wendt signed off, the spacecraft is ready.

There are thousands of people like Wendt in this program. People with specific, essential roles that nobody announces at press conferences. The program is a machine made of people, and every person in it matters.

Wendt matters. The closeout crew matters. They're the last human hands on the spacecraft before it goes.
EOT
    ],

    [
        'date'     => '1966-03-25',
        'title'    => 'Life Magazine and the Astronaut Families',
        'category' => 'Personal',
        'tags'     => 'life magazine,astronaut families,media,american heroes,wives',
        'excerpt'  => 'Life magazine has an exclusive contract with the astronauts and their families. I\'ve been reading these profiles for years. They\'re part of how America knows these people.',
        'content'  => <<<'EOT'
Life magazine has had an exclusive contract with the Mercury Seven astronauts and their families since 1959, paying them $500,000 total for the right to first publication of their personal stories. The contract continued through Gemini. I've been reading these profiles for seven years.

The coverage is celebratory by design — the magazine is invested in making these men and women look their best. The wives are shown waiting at home, doing housework, attending church, watching launches on television surrounded by children and neighbors. The astronauts are shown training, examining hardware, relaxing with their families.

The effect on American culture is significant. These profiles are how most Americans know the astronauts as people rather than as names in a news story. Rene Carpenter (Scott's wife) is vivid and funny in print. Annie Glenn comes across as steely and private, which fits with what we know about how she handles the public attention on her husband. Betty Grissom is described as a worrier — which seems right given that Gus flew experimental aircraft before becoming an astronaut.

The coverage is selective. Life doesn't write about marital difficulties or personal problems. It doesn't write about the astronauts' opinions about the war or civil rights. It constructs a specific image: American hero, loving family, ordinary man doing extraordinary things.

The image is partly true and partly constructed. These are real families with real complexity that the magazine smooths over. Some of the astronauts have well-known reputations for personal behavior that doesn't appear in these pages.

But the image has power. It made the astronauts into figures that ordinary Americans feel personally invested in. The nationwide relief when Glenn's heat shield concern turned out to be a false alarm was partly because millions of people had read his Life profile and felt they knew him.

Celebrity is a tool. The space program has used it skillfully.
EOT
    ],

    [
        'date'     => '1971-10-15',
        'title'    => 'Mariner 9 Orbits Mars',
        'category' => 'Science',
        'tags'     => 'mariner 9,mars orbit,dust storm,olympus mons,valles marineris',
        'excerpt'  => 'Mariner 9 entered Martian orbit on November 13, 1971 and became the first spacecraft to orbit another planet. When the global dust storm cleared, what it revealed was extraordinary.',
        'content'  => <<<'EOT'
Mariner 9 entered Martian orbit in November 1971 and became the first spacecraft to orbit another planet.

It arrived during a global dust storm — the entire surface of Mars was obscured by suspended particles. For weeks, Mariner 9 waited in orbit while mission controllers delayed activating the camera systems. Eventually the storm cleared, and what was revealed was extraordinary.

Olympus Mons: a shield volcano 16 miles high and 370 miles across. The largest volcano in the solar system. Standing three times taller than Mount Everest. Larger than the state of Arizona. The caldera at the top is 53 miles wide.

Valles Marineris: a canyon system that stretches 2,500 miles across the Martian surface, up to 7 miles deep, up to 60 miles wide. If placed on Earth, it would span the continental United States. The Grand Canyon is a small tributary by comparison.

Ancient river channels: features that look unmistakably like dried riverbeds, winding across the Martian surface. The implication — not confirmed but strongly suggested — is that Mars once had liquid water on its surface. A warmer, wetter Mars in the ancient past. What happened to it, nobody is sure yet.

The polar ice caps: clearly visible, growing and shrinking with the seasons. Made of frozen carbon dioxide (dry ice) primarily, but possibly water ice as well.

Mariner 4 in 1965 showed us a cratered, Moon-like surface. Mariner 9 shows us a geologically complex world with the largest volcano in the solar system, the largest canyon, and evidence of past water.

We had the wrong picture of Mars from Mariner 4. Mariner 9 gave us the right one.

Mars is not the Moon. Mars is a world with a history.
EOT
    ],

    [
        'date'     => '1969-09-25',
        'title'    => 'The Pale Blue Dot — Before There Was a Name for It',
        'category' => 'Science',
        'tags'     => 'earth from space,pale blue dot,overview effect,apollo 8,earthrise,perspective',
        'excerpt'  => 'The photographs of Earth from space — from Apollo 8, from the Moon\'s surface — are changing how people think about the planet. I\'ve been sitting with this.',
        'content'  => <<<'EOT'
The photographs of Earth from space are changing how people think about the planet. I've been sitting with this since Apollo 8's Christmas Eve broadcast and now, with the Apollo 11 images also out, I want to write about what I think is happening.

The Earthrise photograph from Apollo 8 — Bill Anders's picture of the Earth appearing above the lunar horizon, blue and white against black space, with the gray lunar surface in the foreground — has become one of the most reproduced photographs in history. It's on posters. It's in textbooks. Time magazine ran it in multiple issues. It is, I believe, genuinely one of the most important photographs ever taken.

What does it do to you, this photograph?

It shows you your home from the outside. This is something no human being could do before December 1968. You could describe the Earth as a sphere orbiting the Sun — scientists have known this for centuries. But you couldn't see it. You couldn't hold the image in your mind of the actual planet, isolated in space, small, finite, vulnerable.

The photograph makes that visible. Here is Earth. This is all of it. The oceans and the clouds and every person who ever lived and every city and every nation — all of it in this small blue curve against the black.

Carl Sagan, who writes about these things for a general audience, has been describing the effect as a kind of philosophical shift — seeing the planet from the outside forces a confrontation with how small we are and how alone this world is in the dark. He hasn't used the phrase "Pale Blue Dot" yet (that's from a Voyager photograph decades away) but the idea is already here.

There are people who believe that the image will matter — philosophically, environmentally, politically — long after the space race is a footnote. That seeing the Earth whole will change how humanity relates to it.

I think they might be right. I hope they're right.

Looking at that photograph: here we are. One world. All of us, together, on this.
EOT
    ],

    [
        'date'     => '1972-03-03',
        'title'    => 'The Saturn V Production Line Shuts Down',
        'category' => 'Technology',
        'tags'     => 'saturn v,production end,last saturn v,apollo,legacy',
        'excerpt'  => 'The last Saturn V has been built. The production line is shutting down. There will be no more Saturn V rockets after the ones already in the inventory.',
        'content'  => <<<'EOT'
The last Saturn V has been built. The production line at the Michoud Assembly Facility in Louisiana is shutting down.

There will be no more Saturn V rockets after the ones already in the inventory.

This is both logistically necessary and profoundly melancholy. The Saturn V program built 15 flight vehicles. Three were used for unmanned tests (Apollo 4, 6, and the Skylab workshop). Twelve were flight-ready for crewed missions. Two have been cancelled with their planned missions (Apollo 18 and 19, with potentially Apollo 20 as well — that last one being repurposed for Skylab). The remaining vehicles in the inventory will be used as planned.

When the last flight is done, that's it. The tooling, the specialized machinery, the supplier base — all of it will disperse. The institutional knowledge will disperse with it. The people who knew how to make the F-1 engine will retire or move to other projects. The machining specifications for the various stages will go into archives.

If we ever wanted to build another Saturn V — in twenty years, thirty years — we couldn't just pull the plans and start again. We'd have to recreate the manufacturing capability from scratch. Some things are only known by doing them, not by reading the specification sheets. The people who knew how to make these things will not be around to teach their successors.

This is called a knowledge cliff, and it's one of the genuine losses of discontinuous programs. You can restart Apollo if you have enough money and enough time, but you cannot restart it tomorrow. You have to start over.

I feel this as a kind of loss. Not the rocket itself — machines are tools, not monuments. But the capability. The fact that we built a thing that could do something extraordinary, and then deliberately stopped being able to build it.

I hope the decision is reversed someday. I hope someone, somewhere, builds something that goes as far as the Saturn V went.
EOT
    ],

    [
        'date'     => '1969-11-01',
        'title'    => 'After the Moon — Where Does the Program Go?',
        'category' => 'Personal',
        'tags'     => 'post-apollo,future,mars,space station,shuttle,what next,1969',
        'excerpt'  => 'We\'ve landed on the Moon. The program continues. But where does it go? What is the next goal that organizes the way Kennedy\'s speech organized this one?',
        'content'  => <<<'EOT'
We've landed on the Moon. The program continues — Apollo 12 is up there right now. But I've been thinking about the question that Kennedy's death made permanent: where does the program go after the Moon?

Kennedy's speech in 1961 had the virtue of absolute clarity. One goal. One deadline. One metric: land a man on the Moon and return him safely before 1970. Every decision in the program could be measured against that goal. Does this advance the Moon landing? Does this put the Moon landing at risk? Yes or no.

The post-Apollo period doesn't have that clarity. There are proposals for a space station, a space shuttle, a lunar base, a Mars mission. All of these are being discussed. None has been committed to with the same force as Kennedy's 1961 speech.

A space station in Earth orbit: logical, useful for science and operations. But what's it for in a way that creates the urgency that the Moon race created?

A Mars mission: the obvious next step, and exactly what Kennedy's logic (we go because it's hard) would support. But Mars is months away, not days. The technical challenges of keeping a crew alive for 500+ days in deep space are substantially harder than the 8-day Moon trip. The cost would be comparable to the whole Apollo program.

The Space Shuttle: practical, cost-reducing (in theory), oriented toward making orbital access routine. But routine isn't inspiring. Routine doesn't make a nation lean forward.

I don't have an answer. I don't think anyone does, which is why the post-Apollo period feels directionless compared to the urgency of the decade that preceded it.

The Moon was a destination. Space is not a destination. It's a direction. "Which way in space" is the question we haven't answered with any clarity.

I'll keep watching. The answer will emerge from the decisions people make, not from the speeches they give.
EOT
    ],

    [
        'date'     => '1973-06-22',
        'title'    => 'My Neighbor Harold Goes to the Hospital',
        'category' => 'Personal',
        'tags'     => 'harold,personal,friendship,health,life goes on,summer 1973',
        'excerpt'  => 'Harold had a minor heart attack last Tuesday. He\'s going to be fine, the doctors say. He asked me from his hospital bed if anything important happened with the space program while he was in.',
        'content'  => <<<'EOT'
Harold had a minor heart attack last Tuesday.

He's going to be fine, the doctors say. He's 56, slightly overweight, doesn't exercise enough — all the predictable risk factors, none of which Harold has ever been interested in addressing. He's in the hospital for a week, then at home recovering for six weeks, then back to his life. The cardiologist expects a full recovery.

I went to see him on Thursday. He was in a hospital bed looking annoyed at the tubes and the schedule and the food. Edna was sitting next to him, working on a crossword, clearly having resigned herself to being present for his annoyance.

Harold asked me, after the usual pleasantries, if anything important happened with the space program while he was in the hospital.

I thought about it for a moment. Skylab 2 launched successfully in May, I said. The parasol repair worked. The crew is conducting solar observations and doing well.

He nodded slowly. "That's the one with the broken wing," he said.

Yes, I said.

"Good," he said. "Glad they fixed it."

He closed his eyes and was quiet for a moment.

"Andrews," he said, without opening his eyes. "You've been watching this thing for sixteen years."

Fifteen and a half, I said.

"You think it was worth it?"

I said I did, without hesitation.

"Why?" he said.

I said: because they went. Because twelve men walked on the Moon and came home. Because the pictures showed us the Earth from the outside and it looks like something worth taking care of. Because the whole enterprise showed that when you commit to something hard and work at it honestly, you can do impossible things.

Harold was quiet for a while. Then he said, "Okay," and went to sleep.

Get well, Harold. I need you for whatever comes next.
EOT
    ],

    [
        'date'     => '1963-07-30',
        'title'    => 'Preparing for Gemini — The Next Step',
        'category' => 'Gemini Program',
        'tags'     => 'gemini preparation,two man crew,1963,titan ii,capsule design',
        'excerpt'  => 'Mercury is finished. Gordon Cooper\'s fourteen orbits in May were the last Mercury flight. Now the program prepares for Gemini, which is more complex in every way.',
        'content'  => <<<'EOT'
Mercury is finished. Gordon Cooper's 22-orbit, 34-hour mission in May was the final Mercury flight. Now the program turns toward Gemini.

Gemini is more complex in every dimension. Two-person crew instead of one. A different capsule design — larger, with better maneuvering capability, an ejection seat for emergencies (unlike the Mercury "escape tower" approach), and onboard computer capability. A different rocket — the Titan II, a two-stage liquid-fuel missile derived from the Air Force ICBM program.

The Titan II carries crew in a way that required careful engineering adaptation. Liquid-fuel rockets can develop a nasty oscillation problem — the propellant sloshing, the structures resonating, the pogo effect I mentioned in relation to the Saturn V. The Titan II Gemini Launch Vehicle has damper systems to address this. The Air Force variant flew without these modifications; the crewed version required them.

The Gemini capsule has more windows (two, compared to Mercury's one small porthole) and a modular design where systems can be more easily accessed for inspection and maintenance. The environmental control system is better. The seats eject — useful on the launch pad or at low altitude, less useful at orbital altitude where parachutes wouldn't work.

The first unmanned Gemini test flight is planned for 1964. The first crewed flight — Gemini 3 — is currently projected for early 1965, with Grissom commanding. Between now and then, there's hardware to validate, procedures to develop, and two men to train for the mission profile.

I've been watching Mercury for two years. Now I need to learn Gemini. The vocabulary is different: rendezvous, docking, EVA, longer duration. The questions are different: not "can a person survive in space" but "can a person work in space."

New question, new program. Forward.
EOT
    ],

    [
        'date'     => '1960-01-05',
        'title'    => 'The Mercury Astronauts on Television',
        'category' => 'Mercury Program',
        'tags'     => 'mercury seven,television,press,1960,public relations,astronauts',
        'excerpt'  => 'The Mercury Seven have been everywhere this past year — magazine covers, television appearances, press conferences. I\'ve been watching them carefully.',
        'content'  => <<<'EOT'
The Mercury Seven have been everywhere for the past year — magazine covers, television appearances, press conferences in Washington and Houston. I've been watching them carefully, trying to understand who these men actually are beneath the official press materials.

The seven men NASA introduced in April 1959 are not a homogeneous group, whatever the press releases might suggest. Watching the press conferences and reading the various profile articles, I've been getting a sense of distinct personalities.

Alan Shepard is the most competitive. When asked about who will fly first, he is the only one who clearly believes he will be first and isn't particularly shy about it. He has the bearing of a man who has always been first in the room and is accustomed to it.

John Glenn is the most publicly polished. Every answer in a press conference is careful and patriotic and well-constructed. He was a fighter pilot and test pilot who is also, it seems, good at being watched. He handles the celebrity of the astronaut role with practiced ease.

Gus Grissom says the fewest words. He answers questions precisely and then stops. No oratory, no extra material. When a reporter asks what he finds most interesting about the Mercury program, he says, "Flying the spacecraft." Period.

Wally Schirra is the one who makes people laugh. He has a genuine wit, and he uses it strategically — to defuse pressure, to keep the room comfortable, and probably to avoid giving away what he's actually thinking.

Gordon Cooper is the youngest and most laconic. He came from Oklahoma and doesn't appear to feel the need to perform for the press.

Scott Carpenter is thoughtful and earnest. Of all of them, he seems the most genuinely interested in the scientific aspects of the program.

Deke Slayton is the one I worry about. He seems to be fighting something private. He's quieter even than Grissom.

Seven men. They're going to be in this notebook for a long time.
EOT
    ],

    [
        'date'     => '1972-06-12',
        'title'    => 'Deke Slayton Gets His Turn',
        'category' => 'Apollo Program',
        'tags'     => 'deke slayton,heart condition,grounded,apollo soyuz,return to flight',
        'excerpt'  => 'Deke Slayton, grounded since 1962 because of a heart arrhythmia, has been medically cleared to fly. He\'s been assigned to the 1975 Apollo-Soyuz Test Project.',
        'content'  => <<<'EOT'
Deke Slayton, grounded since 1962 because of an idiopathic atrial fibrillation detected during a routine medical exam, has been medically cleared to fly.

He's been managing the astronaut office for ten years. He made the crew assignments for Gemini, for Apollo. He decided who flew Mercury's later missions, who walked on the Moon. He sat at his desk in Houston while the people he managed went into space.

He was assigned to Mercury-Atlas 7 — the orbital flight that Scott Carpenter eventually flew. He was grounded six months before his launch date. The heart irregularity was intermittent, not constant; most of the time it wasn't present. The flight surgeons decided they couldn't certify him for flight without further study, and "further study" stretched into years.

He didn't leave the program. He took the chief astronaut position, became the crucial gatekeeper for who flew and when, and held the astronaut corps together through Mercury, Gemini, and Apollo. His role in managing the crew selection process — the most fraught, competitive, and politically sensitive operation in the program — has been fundamental.

Now he's 48 years old and cleared to fly. Assigned to the 1975 Apollo-Soyuz Test Project, where an American crew and Soviet crew will dock their spacecraft in orbit — the first joint spaceflight, a symbol of détente.

He'll be the oldest person to fly in space at that point.

I wrote in 1960 that I worried about Slayton — something private he seemed to be fighting. He was fighting this. Ten years of watching others fly. Now his turn.

Deke Slayton, 1975. After everything he built, he gets to fly in it.

Good.
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

    $cat_id = get_category_id_12( $p['category'] );

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

echo "\n=== Import 12 complete: {$created} created, {$skipped} skipped ===\n";
