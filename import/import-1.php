<?php
/**
 * Apollo Blog Import - Part 1: Pre-Apollo, Mercury, Gemini, Apollo 1
 * Run via: ddev wp eval-file import/import-1.php
 */

$posts = [];

// ============================================================
// MERCURY ERA
// ============================================================

$posts[] = [
    'date'     => '1961-04-12',
    'title'    => 'The Russians Did It First',
    'category' => 'Mercury',
    'tags'     => ['gagarin', 'soviet-union', 'first', 'vostok', 'cold-war'],
    'excerpt'  => 'Yuri Gagarin orbited the Earth this morning while I was eating breakfast. The radio announcer said it so matter-of-factly that for a second I thought I heard wrong. I put down my fork and turned up the volume. The Russians put a man in space. First.',
    'content'  => '<p>I heard it on the radio before I even finished my first cup of coffee. It was a Wednesday morning, April 12th, 1961. The announcer said it so matter-of-factly that for a moment I thought I had misheard. Then he said it again: a Soviet cosmonaut named Yuri Alexeyevich Gagarin had just completed one orbit of the Earth and landed safely in Russia. One hour and forty-eight minutes in space. The first human being to leave this planet.</p>

<p>I sat at my kitchen table with my fork halfway to my mouth and I just stopped moving.</p>

<p>Betty came in from the kitchen and asked what was wrong. I told her. She said, "The Russians?" and I said yes, the Russians. She shook her head in a way that I couldn\'t quite interpret — was that admiration? Worry? Disgust? I had the same problem with my own reaction. I wasn\'t sure what I felt.</p>

<p>At work, it was all anyone talked about. My colleague Frank, who is a Navy man through and through, was furious. "They beat us," he kept saying. "They beat us again." He was thinking about Sputnik four years ago, the satellite that had beeped its way around Earth while America watched. That was humiliation enough. But a man? A human being? The first one to leave Earth was going to be a Russian pilot named Yuri Gagarin, and not an American, and there wasn\'t a single thing Frank or I or anyone else could do about it.</p>

<p>But the more I sat with it — through the afternoon meetings, through the drive home, through dinner — the more something else crept in alongside the national wound. Something like awe. A man had been in space this morning. A person had looked down at our planet from orbit. Whatever you thought about Soviet politics or the arms race or Khrushchev banging his shoe at the United Nations, a human being had done something that no human being had ever done before, and that was... remarkable. That was just remarkable.</p>

<p>I went to the library after dinner and found everything I could about Vostok — that\'s what they called the spacecraft. It means "east" in Russian. Gagarin was in there for 108 minutes. The spacecraft weighed about five tons. He didn\'t control it — it was automated; he was along for the ride, essentially, which some people are saying is why the Soviets didn\'t mind sending him. But he was still up there. He was still floating somewhere above the Earth, looking down, while the rest of us ate our breakfasts and did our jobs.</p>

<p>What did he see? What does Earth look like from orbit? I tried to imagine it — the curve of the horizon, the thin shell of atmosphere, the blackness of space. The papers say he reported that the Earth looked beautiful, that he could see clouds and oceans and the edges of continents. I believe him. I think it would have to be beautiful. I think if you\'re the first person to ever look down at your home planet from the outside, you see it new. You see it the way Adam must have seen the garden — before you\'ve gotten used to it.</p>

<p>My neighbor Harold came over while I was out in the yard that evening, and we stood for a while looking up at the sky. It was getting dark and the stars were coming out. Harold said, "They beat us." And I said yes. Harold said, "It\'s shameful." And I said I wasn\'t sure shameful was the right word exactly. He looked at me like I had lost my mind. Maybe I had.</p>

<p>Here\'s what I keep coming back to: Gagarin is twenty-seven years old. He grew up in a log cabin. His family was evacuated during the German occupation in World War II. He became a steel worker before he became a pilot, before he became a cosmonaut, before he became the first human being to see Earth from space. The same Earth that Abraham Lincoln looked up at and Isaac Newton looked up at and everyone who has ever lived has looked up at — Yuri Gagarin looked DOWN at it. This morning.</p>

<p>I wonder what America\'s response will be. President Kennedy has been in office less than three months. I imagine there are some urgent conversations happening in Washington today. If Gagarin\'s flight doesn\'t light a fire under the American space program, I don\'t know what would.</p>

<p>Before I went to bed, I stepped outside one more time. The sky was fully dark. I looked up and tried to find something — some mark of what had happened today. There was nothing, of course. Just the same stars as always. But I knew now, in a way I hadn\'t known this morning, that the space between us and those stars was not empty and unreachable. A man had been there today. One of us. Even if he was a Russian.</p>',
];

$posts[] = [
    'date'     => '1961-05-05',
    'title'    => 'Alan Shepard Goes Up',
    'category' => 'Mercury',
    'tags'     => ['alan-shepard', 'mercury', 'freedom-7', 'first', 'american-in-space', 'suborbital'],
    'excerpt'  => 'An American is in space. Alan Shepard, Navy Commander and test pilot, rode Freedom 7 to the edge of space and back this morning. Fifteen minutes and twenty-two seconds. It wasn\'t an orbit — the Soviets did that weeks ago — but it was something. It was ours.',
    'content'  => '<p>This morning I watched a man go to space on a television set in the window of Caldwell\'s department store on Fifth Street. I had taken a long lunch specifically for this purpose. The store had pushed the set right up to the glass so the crowd gathering on the sidewalk could watch, and there were maybe forty of us standing there when the countdown reached zero.</p>

<p>Alan Shepard. Commander, United States Navy. Test pilot, Project Mercury astronaut. The first American in space.</p>

<p>The rocket was called the Redstone — a smaller and more modest vehicle than the Soviet Vostok booster, honestly — and it carried a capsule called Freedom 7. The capsule was barely big enough for one man to fit inside. I\'ve seen the photographs, and I keep thinking about what it would feel like to climb into something that small, let them seal the hatch, and wait while someone counted down from ten. The courage required for that one action — just sitting there and waiting — seems to me almost beyond comprehension.</p>

<p>The countdown ran on time, which I was told is unusual. The rocket ignited right at 9:34 AM Eastern time. I watched it rise off the pad at Cape Canaveral. The crowd on the sidewalk went quiet. Someone next to me — a woman in a green coat — grabbed my arm, which I didn\'t mind at all, because I had a similar impulse toward the stranger on my left. We watched the white needle climb into the morning sky and then diminish to a bright spark and then disappear.</p>

<p>Fifteen minutes and twenty-two seconds later, Alan Shepard was in the Atlantic Ocean, alive, having been to the edge of space and back. The helicopter was already picking him up when the announcer confirmed everything had gone well.</p>

<p>I walked back to the office in a kind of daze. People were celebrating in the streets — actually celebrating, clapping and calling out. Someone had a radio and people were gathered around it on the steps of the courthouse. A man in a gray suit was shaking hands with strangers. I shook his hand too.</p>

<p>Now, I want to be honest about something: this was not what Gagarin did. Gagarin orbited the Earth. Shepard went up and came back down in a steep arc — what they\'re calling a suborbital flight. His maximum altitude was 116 miles. He was weightless for about five minutes. He traveled roughly 302 miles downrange. It took fifteen minutes, while Gagarin\'s flight took nearly two hours. The Soviets will note all of this, and they won\'t be wrong.</p>

<p>But here is what I keep thinking about: he did it. An American did it. He rode a rocket into space, he looked out the window (there\'s a small porthole in the capsule — he asked them to include it), he reported what he saw, he stayed calm, and he came back. The capsule splashed down in the ocean and a helicopter retrieved him and he was fine. He was fine. Alan Shepard is alive and America is in space.</p>

<p>The things I know about Shepard: he\'s a New Hampshire man, born in 1923. He flew fighters in World War II and became a test pilot after. He was one of the original seven Mercury astronauts selected in 1959. He\'s supposed to be ferociously competitive — they say he wanted very badly to be first, and the selection for this first flight was kept secret almost until launch day. He got it. He won.</p>

<p>Betty asked me over dinner what I thought it felt like. To be in space, even for fifteen minutes. I said I didn\'t know. I said I thought it probably felt like nothing else in human experience. You leave the Earth. You float. You see something no one in your family line, going back to the first humans, has ever seen. And then you come back down. I said I thought it probably felt like being born, or like dying, or like something for which we don\'t have a word yet.</p>

<p>She said I was being dramatic. She\'s probably right. But I think this is one of the times when being dramatic is the appropriate response.</p>

<p>America is in space. One man, fifteen minutes, and something has changed. I don\'t know exactly what yet. But something has.</p>',
];

$posts[] = [
    'date'     => '1961-05-26',
    'title'    => 'Before the Decade Is Out',
    'category' => 'Mercury',
    'tags'     => ['kennedy', 'moon', 'goal', 'cold-war', 'nasa', 'speech'],
    'excerpt'  => 'President Kennedy told Congress we\'re going to the Moon. Before the decade is out. That\'s 1969, eight years from now. The Moon. My neighbor Harold says it\'s a waste of money. I told Harold that people probably said the same thing about Columbus. Harold said Columbus didn\'t cost four billion dollars.',
    'content'  => '<p>I read it in the Evening Star on the bus home from work. President Kennedy had given a special address to Congress. He talked about national security and the space program and the urgent need for America to lead. And then he said it, in plain English, right there in the Congressional Record:</p>

<blockquote><p>"I believe that this nation should commit itself to achieving the goal, before this decade is out, of landing a man on the Moon and returning him safely to the Earth."</p></blockquote>

<p>Before this decade is out. The decade ends in 1969. Eight years. A man on the Moon in eight years.</p>

<p>I sat on that bus and I read the sentence three times. Then I folded up the paper and looked out the window at the passing buildings and tried to figure out what I thought about this.</p>

<p>The Moon. Not orbit. Not a space station. The Moon itself. A human being, standing on the surface of another world, 240,000 miles from Earth. In eight years.</p>

<p>I should say: I am not a scientist. I am not an engineer. I did not study physics or aeronautics or anything of the kind. I work in an insurance company on the seventh floor of a building on Pennsylvania Avenue, and my primary responsibilities involve claims processing and quarterly reports. I know the Moon the way anyone knows it: as a light in the sky. As something I\'ve looked at my whole life without ever really thinking about what it is.</p>

<p>But even I — even someone who barely passed high school chemistry — can feel the audacity of what Kennedy just proposed. We have been to space exactly once, for fifteen minutes. The Soviets have been twice, much longer. We don\'t have an orbital spacecraft yet. We haven\'t docked two vehicles in space. We haven\'t done a spacewalk. We have done essentially nothing, in the cosmic scheme of things, except point a rocket at the sky and see if it went in the right direction.</p>

<p>And the President just told Congress we\'re going to the Moon in eight years.</p>

<p>Harold from next door came over that evening — he\'d seen the speech on television, or read about it — and he was not impressed. Harold is a practical man. He sells hardware and he knows what things cost. He said: four billion dollars. That\'s the number they\'re talking about. Four billion dollars. Could feed every hungry child in America for years, he said. Could rebuild every crumbling bridge. Could do a thousand things more immediately useful than sending one man to step on some rocks 240,000 miles away.</p>

<p>I said: people probably said the same thing about Columbus. Why spend money sending ships to the west when there are problems right here in Spain?</p>

<p>Harold said Columbus didn\'t cost four billion dollars.</p>

<p>He has a point. He always has a point. And I don\'t entirely disagree with him — I know there are hungry people and broken bridges. But I also know that something about Kennedy\'s speech sits differently in me than Harold\'s objections do. There is something about the idea — the image of an American standing on the surface of the Moon and looking back at Earth — that touches something I can\'t quite articulate. Not just national pride. Something more than that. Something about what we are as a species. What we\'re capable of.</p>

<p>Can we do it? Can we actually do it? I genuinely don\'t know. Shepard was in space for fifteen minutes. The Moon is 240,000 miles away. We would need a rocket many times more powerful than the Redstone. We would need a spacecraft that could survive the journey and land and lift off again from another world. We would need navigation systems that don\'t exist yet. We would need to solve problems we don\'t even know about yet.</p>

<p>But Kennedy said: before the decade is out. He said it to Congress, which means Congress will have to fund it. Which means at least some portion of the federal government believes it might actually be possible.</p>

<p>I clipped the speech out of the paper and put it in a folder. I suspect it will be worth keeping.</p>

<p>My coffee was cold by the time I put the paper down. I hadn\'t noticed. I was sitting at the kitchen table going cold wondering what it would feel like to look up someday and know there was an American standing on the Moon.</p>

<p>Eight years. Maybe.</p>',
];

$posts[] = [
    'date'     => '1962-02-20',
    'title'    => 'John Glenn Goes Around the World',
    'category' => 'Mercury',
    'tags'     => ['john-glenn', 'friendship-7', 'orbit', 'first', 'american-orbit', 'mercury', 'national-pride'],
    'excerpt'  => 'John Glenn orbited the Earth three times today. I took a half-day from work and watched on television. When his capsule came down in the Atlantic I realized I had been holding my breath for most of the last four hours. Three orbits. An American in orbit. Finally.',
    'content'  => '<p>I took a half-day from work. The boss looked at me over his glasses and said, "Glenn flight?" and I said yes, and he waved me out without another word. I think he went home early himself.</p>

<p>Betty was already at the television when I got there. She\'d made sandwiches. The kids were in school — I thought about calling them home but decided against it; it would be chaos and they could watch the news tonight. So it was just Betty and me, sitting close together on the couch, watching the launch coverage from Cape Canaveral.</p>

<p>The launch had been delayed. Again. I\'ve lost count of how many times the Glenn launch has been postponed — weather, technical problems, one thing and another. It\'s been weeks of waiting. But today, February 20th, 1962, the launch went forward. The Atlas rocket — a different vehicle than Shepard\'s Redstone, much more powerful — ignited at 9:47 in the morning.</p>

<p>I watched John Glenn go to orbit.</p>

<p>He went around the Earth three times. Three complete circles of our entire planet, going roughly five miles per second, taking about 88 minutes per orbit. When they showed the ground track on a map — a line wiggling across the continents and oceans — I tried to follow it with my finger and couldn\'t quite keep up. He was over Australia. He was over the Indian Ocean. He was over California. He was coming up on Florida. Each lap took less than an hour and a half.</p>

<p>There was a scare that I only found out about afterwards, in the news. During the second orbit, a sensor indicated that the heat shield — the thing that protects the capsule during reentry, the thing that keeps the astronaut from burning up — might be loose. Mission Control made the decision not to tell Glenn (at least not everything) but to have him keep the retrorocket package attached during reentry, in case it could hold the heat shield in place. This meant a more uncomfortable reentry — the retropackage burns and breaks apart against the heat — but it was their backup plan.</p>

<p>The heat shield was fine. The sensor was faulty. Glenn came through reentry without incident.</p>

<p>But here\'s the thing: for those final minutes of reentry, when Glenn was going through radio blackout — when the ionized plasma around the capsule cuts off all communication — nobody knew for certain whether he was okay. The announcer on television filled the silence with careful words. Betty\'s hand found mine on the couch.</p>

<p>Then Glenn\'s voice came through. Clear. Calm. "That\'s a real fireball outside." He was describing the reentry from inside the capsule, watching the flames. He was alive. He was fine. The capsule came down on its parachutes into the Atlantic Ocean and the recovery ship was there waiting.</p>

<p>I let out a breath I had apparently been holding for quite a while.</p>

<p>John Glenn is forty years old. He was a Marine pilot in both World War II and Korea. He set a transcontinental speed record in 1957. He\'s one of the original seven Mercury astronauts and he has been waiting for this flight for years while Shepard and Grissom went first on the shorter suborbital missions. He waited with enormous grace and patience, from everything I\'ve read. He got his orbit.</p>

<p>The ticker-tape parade in New York is being planned for next week. I\'m sure it will be magnificent — I saw footage of Shepard\'s parade and it was enormous, but this feels like something different. Shepard went to the edge of space and came back. Glenn circled the world. Three times. He saw the Earth the way no American had ever seen it before, from orbit, and he came home, and something about that feels like a turning point.</p>

<p>I walked outside after dinner and looked up. There were clouds, so I couldn\'t see much. But I stood there anyway for a few minutes, thinking about the fact that somewhere up above those clouds — not very far up, really, in the cosmic scheme of things — John Glenn had been this morning. One of us. Going around and around and around our spinning planet, at five miles per second, watching sunrises and sunsets tick past every forty-five minutes.</p>

<p>I think we might actually do this.</p>',
];

$posts[] = [
    'date'     => '1962-09-12',
    'title'    => 'We Choose to Go to the Moon',
    'category' => 'Mercury',
    'tags'     => ['kennedy', 'rice-university', 'we-choose-to-go', 'moon', 'speech', 'cold-war', 'hard'],
    'excerpt'  => 'President Kennedy spoke at Rice University today. "We choose to go to the Moon not because it is easy, but because it is hard." I read the whole speech in the paper. I read it twice. The neighbor Harold says it\'s still a waste of money. I told Harold the hard things are the ones worth doing.',
    'content'  => '<p>The full text of President Kennedy\'s speech at Rice University was printed in the paper today. I read all of it twice, which is more than I do with most speeches.</p>

<p>He stood at Rice Stadium in Houston, Texas, in the heat of September, and he talked about the pace of human progress and the challenge of space and the nature of the American character. He talked about how in one lifetime — a single human lifetime — we went from Kitty Hawk to orbital flight. He said that no nation which expects to be the leader of other nations can expect to stay behind in this race for space.</p>

<p>And then he said the thing that I keep coming back to:</p>

<blockquote><p>"We choose to go to the Moon in this decade and do the other things, not because they are easy, but because they are hard, because that goal will serve to organize and measure the best of our energies and skills, because that challenge is one that we are willing to accept, one we are unwilling to postpone, and one which we intend to win."</p></blockquote>

<p>Not because they are easy, but because they are hard.</p>

<p>I stopped when I read that line and just sat with it for a minute. I think that might be the most honest thing a President has said in a long time — not a promise of easy victory, not a claim that we\'re already winning, but an acknowledgment that this is hard and we\'re doing it anyway because hard things are worth doing.</p>

<p>Harold came over. He\'d seen the speech on the news. He said, "He\'s spending billions of dollars on a stunt." I said, "He\'s spending billions of dollars on the future." Harold said, "Same thing." We had a respectful disagreement and he went home to watch the game.</p>

<p>But I keep thinking about Kennedy\'s words. Not just the famous "because it is hard" line, but the part earlier in the speech where he talks about the pace of change. He said: if you compress all of human history into fifty years, then modern man appeared about ten years ago. Agriculture appeared about two years ago. The printing press appeared this year. The steam engine appeared last month. The airplane appeared a week ago. The space age began the day before yesterday. This morning — if you do the math — John Glenn orbited the Earth.</p>

<p>And now we\'re going to the Moon.</p>

<p>The thing that stays with me is the scale of the commitment Kennedy is making. The NASA budget will need to be expanded enormously. Facilities will have to be built. A completely new rocket will have to be designed and built from scratch — the Saturn V they\'re talking about. A completely new spacecraft. New navigation systems, new communications systems, new everything. The Manned Spacecraft Center they\'re building in Houston. The Vehicle Assembly Building at Cape Canaveral. The tracking stations around the world. All of it building toward one thing.</p>

<p>I\'m not a naive person. I understand that part of this is Cold War politics, that we\'re doing this because the Soviets have been beating us and the national prestige matters to the people who make these decisions. Kennedy didn\'t speak to Congress last year because he was inspired by the romantic notion of exploration. He spoke because Gagarin had just embarrassed us and Kennedy needed to find something America could win.</p>

<p>But I also think — I genuinely think — that in choosing the Moon, something happened. Something crystallized. The Cold War competition picked a target that is also a real thing of wonder. The Moon. It\'s not just a political goal. It\'s the Moon. It\'s something humans have been looking at for as long as there have been humans, something that has pulled at us and mystified us and been present in every night sky anyone has ever seen.</p>

<p>We choose to go. Not because it\'s easy. Because it\'s hard.</p>

<p>I put the newspaper clipping in my folder. The one with Kennedy\'s first speech is in there already. I think I\'m going to end up with a lot of clippings before this is all over.</p>',
];

$posts[] = [
    'date'     => '1965-06-03',
    'title'    => 'Ed White Walks in Space',
    'category' => 'Gemini',
    'tags'     => ['ed-white', 'spacewalk', 'eva', 'gemini-4', 'first', 'american-spacewalk', 'wonder'],
    'excerpt'  => 'An American walked in space today. Ed White opened the hatch on Gemini 4 and floated outside for twenty-three minutes, tethered to the spacecraft, floating over Earth. The mission commander had to order him back inside. White said it was the saddest moment of his life.',
    'content'  => '<p>My kids gathered around the television this afternoon and we watched a man float outside his spacecraft over the Earth.</p>

<p>Edward H. White II — Ed White — opened the hatch of Gemini 4 this morning while the spacecraft was somewhere over Hawaii, at an altitude of around 120 miles, going approximately 17,500 miles per hour. He pushed himself out of the capsule and floated. He was wearing a spacesuit and had a tether connecting him to the spacecraft and a small handheld maneuvering gun that let him propel himself around.</p>

<p>He was outside for twenty-three minutes.</p>

<p>Twenty-three minutes outside the spacecraft, above the Earth, in space. He could see the continent of the United States below him. He said he could see individual cities. He floated over the Gulf of Mexico and the Atlantic. He tumbled and laughed. He\'s an Air Force pilot, a graduate of West Point and the University of Michigan — exactly the kind of man you\'d expect to be calm about something like this. But you can hear in the audio recordings — they played portions of them on television — that he is delighted. Not just calm. Delighted. This man is having the time of his life.</p>

<p>At the end of the twenty-three minutes, the mission commander James McDivitt told him he had to come back in. White replied, "I\'m coming back in, and it\'s the saddest moment of my life."</p>

<p>I replayed that in my head for the rest of the afternoon.</p>

<p>The saddest moment of my life. To be outside the spacecraft, floating above the Earth, in the silence of space — and then to have to go back inside the capsule because the mission plan says so. I understand why McDivitt called him in; they were burning through time and resources, and White still had to get back inside and seal the hatch before reentry. Mission rules are mission rules. But I understand White too. Who would want to come back?</p>

<p>There was a Soviet spacewalk earlier this year — Alexei Leonov in March, outside the Voskhod 2 capsule. He went out for twelve minutes. What the Soviet news didn\'t mention, at least not immediately, was that Leonov nearly didn\'t make it back in — his suit had inflated in the vacuum of space and he couldn\'t fit through the hatch. He had to bleed air out of the suit, risking decompression sickness, to get back inside. He made it. But it was considerably closer than the official reports suggested.</p>

<p>White\'s EVA went smoothly. His suit worked. His maneuvering gun worked. The tether worked. He came back in when told, even if reluctantly. America\'s first spacewalk was a success.</p>

<p>My daughter asked me tonight what it must feel like — to be outside the spacecraft. To be floating in nothing, with nothing between you and the stars except a spacesuit. I said I thought it must feel terrifying and magnificent in equal measure. She said she would want to do it. She\'s twelve years old and she wants to go to space. I did not think this was a realistic aspiration when she was nine, when she first said it. I\'m less certain now.</p>

<p>The Gemini program is doing exactly what it\'s supposed to do: learning how to work in space. Spacewalks, rendezvous, long-duration flights — all the skills needed to go to the Moon. Each mission teaches something. This one taught us that a man can work outside a spacecraft, can maneuver, can perform tasks in the vacuum of space. That\'s not a small thing.</p>

<p>The Moon is getting closer. Not literally — it\'s still 240,000 miles away. But the distance between what we know how to do and what we need to know how to do is shrinking mission by mission.</p>

<p>I hope White gets another flight. I hope they send him to the Moon someday. He seems like exactly the kind of man who should see it.</p>',
];

$posts[] = [
    'date'     => '1965-12-15',
    'title'    => 'Two Ships in the Same Sky',
    'category' => 'Gemini',
    'tags'     => ['gemini-7', 'gemini-6a', 'rendezvous', 'first', 'meeting-in-space', 'frank-borman', 'jim-lovell', 'wally-schirra'],
    'excerpt'  => 'Gemini 6 and Gemini 7 rendezvoused in orbit yesterday — two American spacecraft flying within a foot of each other, 185 miles above Earth. Nobody has ever done anything like this. The pilots waved at each other through their windows. I couldn\'t understand why I was so moved until Betty pointed out: this is how we get to the Moon.',
    'content'  => '<p>Here is something that has never happened before in the history of the human race: two spacecraft piloted by human beings have met in orbit. Not docked — that comes later. But met. Frank Borman and Jim Lovell in Gemini 7, which had been in space since December 4th; and Wally Schirra and Tom Stafford in Gemini 6A, which launched yesterday. They flew within a foot of each other, roughly 185 miles above Earth.</p>

<p>A foot. That\'s twelve inches. At 17,500 miles per hour.</p>

<p>The orbital mechanics required for this boggle my mind, and I\'ve been trying to understand them since I read the first articles. You would think that if you want to catch up to a spacecraft ahead of you, you would fire your engine and speed up. But that\'s not how it works in orbit. If you speed up, you go to a higher orbit, and a higher orbit takes longer to complete — so you actually fall behind. To catch up, you have to slow down first, drop to a lower orbit, go faster in that lower orbit, and time the whole thing so you arrive at the right place at the right moment.</p>

<p>I explained this to Betty and she looked at me the way she sometimes does — patient, kind, faintly skeptical — and said, "So they caught up to the other one?" Yes, I said. They caught up. The crews waved at each other through their windows. Lovell held up a sign that said "BEAT ARMY" — he\'s a Naval Academy man and Stafford went to Air Force. Even in orbit, the old rivalries persist.</p>

<p>Borman and Lovell have been in space for eleven days now, which is a record. They\'re going for two weeks — the length of a Moon voyage and return. Their job is endurance. Can the human body tolerate two weeks in space? It\'s deeply uncomfortable, apparently — the Gemini capsule is about the size of the front seat of a small car, and two men have been in there for nearly two weeks, barely able to move. But their bodies seem to be holding up.</p>

<p>Schirra and Stafford were there for the rendezvous and then backed away. They\'ll come home in a day or two. Borman and Lovell will stick it out to the full two weeks.</p>

<p>But the rendezvous is the milestone. Because here\'s why this matters, and Betty was right to point it out: the plan to go to the Moon requires a spacecraft to leave Earth, travel to the Moon, separate into two pieces, have one piece land and one piece stay in orbit, and then have the two pieces FIND EACH OTHER and dock again in lunar orbit before coming home.</p>

<p>If we can\'t rendezvous — if we can\'t find one spacecraft with another in the emptiness of space — we can\'t get the crew home from the Moon. They\'ll be stranded in lunar orbit or lost on the surface forever. The rendezvous isn\'t a technical footnote. It\'s a survival requirement.</p>

<p>Yesterday, two American spacecraft flew within a foot of each other in orbit. The technique works. The navigation works. The crew training works. The mission planning works.</p>

<p>We can find things in space. We can meet up. We can come within a foot of each other at 17,500 miles per hour and stay there and wave through the window.</p>

<p>I think we\'re going to the Moon.</p>

<p>Not this year, and probably not next year. The Gemini program still has several missions to go. The Apollo spacecraft is still being built and tested. There are a thousand things that could go wrong. But I think, watching this unfold, that Kennedy\'s promise is not impossible. It\'s actually happening. Mission by mission, skill by skill, problem by problem, we\'re building the capability to do the impossible thing.</p>

<p>I called my parents tonight and told my father about the rendezvous. He\'s seventy-one and served in the First World War. He said, "Two spacecraft in orbit at the same time?" I said yes. He was quiet for a moment and then he said, "Well. I\'ve lived to see everything."</p>

<p>I think that might be exactly right.</p>',
];

$posts[] = [
    'date'     => '1966-03-17',
    'title'    => 'Neil Armstrong Almost Died Up There',
    'category' => 'Gemini',
    'tags'     => ['neil-armstrong', 'gemini-8', 'emergency', 'scary-moment', 'abort', 'near-miss', 'dave-scott'],
    'excerpt'  => 'The Gemini 8 mission nearly ended in catastrophe yesterday. Neil Armstrong and David Scott were in an uncontrolled spin — one revolution per second — when Armstrong managed to use the reentry thrusters to stop the tumbling. They had to abort the mission. Armstrong is home. But reading the account of what happened up there was frightening.',
    'content'  => '<p>I read the account three times before I felt like I understood what happened yesterday.</p>

<p>Neil Armstrong and David Scott launched on Gemini 8 on March 16th with two goals: to dock with an unmanned Agena target vehicle — which would be the first docking in space — and to have Scott perform an EVA. They achieved the first goal almost immediately; the docking with the Agena went smoothly, and it was the first time two spacecraft had actually joined together in orbit. A genuine milestone.</p>

<p>And then everything went wrong.</p>

<p>The combined spacecraft began to roll — a slow rotation that Armstrong and Scott noticed but initially attributed to the Agena. Armstrong used Gemini\'s thrusters to try to stop the rolling, but it continued. They undocked from the Agena, thinking that would fix it.</p>

<p>It didn\'t fix it. It made it worse. The problem wasn\'t the Agena. The problem was Gemini — specifically, one of Gemini 8\'s own thruster valves had stuck open, and it was firing continuously. With the Agena attached, the Agena\'s greater mass had partially masked the effect. Once they undocked, Gemini 8 began spinning freely, and it accelerated fast. By the time they identified the problem, the spacecraft was rotating at one revolution per second. That\'s sixty revolutions per minute. Armstrong and Scott were on the edge of losing consciousness.</p>

<p>Armstrong made a decision: he shut down all sixteen of the Orbit Attitude and Maneuvering System thrusters and used the Reentry Control System — the thrusters designed only for use during reentry — to stop the spin. It worked. The spacecraft stabilized. Both men were conscious. No one was dead.</p>

<p>But mission rules say: once you\'ve used the reentry thrusters in orbit, you have to come home immediately. They can\'t be "used up" before reentry. So Gemini 8 had to cut the mission short. They came home after less than eleven hours of a planned three-day flight. No EVA. No second docking attempt. Just survival and reentry.</p>

<p>Armstrong landed the capsule precisely in the backup recovery zone in the Pacific. Pinpoint landing under extreme pressure after a near-catastrophe, on an abbreviated mission plan, with limited remaining fuel. The Navy ships had to steam three hours to reach them.</p>

<p>I thought about this all day. Neil Armstrong is thirty-five years old. He\'s a civilian — technically; he was Navy before. He\'s an engineer as much as a pilot, which apparently is part of what saved them: a fighter pilot\'s instinct might have been to fight the spin directly; an engineer\'s instinct was to figure out where the spin was coming from and cut it off at the source. Armstrong did the right thing and saved both their lives.</p>

<p>I filed the name: Neil Armstrong. Cool head in a crisis. Thinks clearly when everything is going wrong. Those are the qualities you want in an astronaut.</p>

<p>The program had its first real emergency, and the crew came home alive. The systems worked — the backup thrusters worked. The decision-making worked. Mission Control worked. The mission was cut short but no one died.</p>

<p>Still, I found myself thinking about what it would have been like if Armstrong hadn\'t identified the problem in time. One revolution per second. That\'s nauseating to imagine even sitting here in my chair. Up there, at altitude, in a spinning capsule, with the world wheeling past the windows and your hands on controls and the seconds ticking away — what does a man feel in that moment? What does he tell himself to stay calm enough to save his own life?</p>

<p>I don\'t know. I hope I never have to find out.</p>

<p>But Armstrong did. And now he\'s home.</p>',
];

// ============================================================
// APOLLO DEVELOPMENT ERA
// ============================================================

$posts[] = [
    'date'     => '1966-11-15',
    'title'    => 'Gemini Is Over — And I Can\'t Believe What We Did',
    'category' => 'Gemini',
    'tags'     => ['gemini', 'reflection', 'summary', 'apollo', 'nasa', 'achievement'],
    'excerpt'  => 'Gemini 12 splashed down yesterday and the Gemini program is over. Ten missions. Ten crews. Every major skill required for a Moon landing has been demonstrated. Rendezvous, docking, long-duration flight, spacewalks. We started two years ago not knowing if any of this was possible. We know now.',
    'content'  => '<p>Yesterday afternoon, Gemini 12 splashed down in the Atlantic Ocean with Jim Lovell and Buzz Aldrin aboard. Lovell has now flown twice. Aldrin, on his first spaceflight, spent more time outside a spacecraft — five and a half hours total across three EVAs — than any American before him, and he did it without the exhaustion problems that plagued earlier spacewalkers. He found the secret: handholds, restraints, and not fighting the physics of weightlessness. Work with it, not against it.</p>

<p>The Gemini program is over.</p>

<p>Ten missions. Gemini 3 through Gemini 12, from March 1965 through November 1966. I watched all of them. Every launch, every recovery. I sat by the radio during the rendezvous missions trying to visualize what it was like to thread one spacecraft to within a foot of another, 185 miles up. I watched Ed White\'s spacewalk on television. I held my breath during the Gemini 8 emergency. I stayed up late to hear that Borman and Lovell had made it two weeks in space without their bodies failing.</p>

<p>Let me list what we know how to do now that we didn\'t know before Gemini started:</p>

<p>We know that humans can survive in space for up to two weeks. We know that the cardiovascular and muscular systems, while they deteriorate in weightlessness, don\'t deteriorate enough in that timeframe to prevent the Moon missions from proceeding. The Moon trip is eight days each way, roughly. We can do it.</p>

<p>We know how to rendezvous in orbit. We know how to find one spacecraft with another in the darkness of space using radar and computers and orbital mechanics. We\'ve done it over and over, in different configurations, from different directions, at different relative speeds.</p>

<p>We know how to dock — how to physically join two spacecraft together so that crews and equipment can transfer between them. This is essential for the Moon mission: the lunar module has to dock with the command module in orbit around the Moon before anyone can come home.</p>

<p>We know that humans can work outside their spacecraft. After the difficulties of the earlier EVAs — Gene Cernan on Gemini 9 reported nearly losing consciousness from overheating — Aldrin figured out the solution: plan the tasks carefully, work slowly, attach yourself to the spacecraft with foot restraints so you don\'t have to fight to stay in place. EVA is possible. It can be done safely.</p>

<p>What does all of this add up to? It adds up to: we can probably go to the Moon. Not that we\'ve figured everything out — the Apollo spacecraft is still being built, the Saturn V rocket has never flown, and a thousand problems remain unsolved. But the fundamental skills, the ones that Gemini was designed to demonstrate, have been demonstrated.</p>

<p>Apollo is next. The first crewed Apollo flight could be as early as next year. The lunar landing could be 1968, maybe 1969. Kennedy\'s deadline — before the decade is out, he said — is still achievable. It looked impossible for a while. It looks less impossible now.</p>

<p>I folded up the newspaper with the Gemini 12 splashdown story and added it to the folder. The folder is getting thick. I have clippings from every Gemini mission, plus Mercury, plus the early program announcements, plus Kennedy\'s speeches. It\'s starting to look like research.</p>

<p>Maybe it is. Maybe someday I\'ll look back through all of this and be able to tell someone: I was paying attention. I watched it happen. I knew what it meant at the time.</p>

<p>There\'s a Moon up there. And for the first time in my life, I think we\'re going to stand on it.</p>',
];

$posts[] = [
    'date'     => '1967-01-15',
    'title'    => 'The Men Who Will Fly First',
    'category' => 'Apollo 1',
    'tags'     => ['gus-grissom', 'ed-white', 'roger-chaffee', 'apollo-1', 'crew', 'profiles', 'first-crewed-apollo'],
    'excerpt'  => 'The crew of the first Apollo mission has been named for months: Virgil "Gus" Grissom, Edward White, and Roger Chaffee. Their spacecraft is AS-204. They\'re scheduled to launch in February. I have been following Grissom since 1961 and White since his spacewalk. Chaffee is new to me. I looked him up.',
    'content'  => '<p>The first Apollo crew has been set for a while now, but the launch date is getting close enough that I find myself thinking about them as people. Let me write down what I know.</p>

<p>Virgil Ivan "Gus" Grissom. Lieutenant Colonel, United States Air Force. He was the second American in space — his Mercury flight in 1961 lasted about fifteen minutes, and then his capsule sank in the Atlantic when the hatch blew open prematurely. There was gossip, unfair I always thought, that he panicked and caused it. The investigation cleared him. The hatch design was flawed. And then he went back to space on Gemini 3 — the first Gemini mission — and flew a textbook mission with John Young. He named the capsule Molly Brown, after the Titanic survivor, because of the Liberty Bell 7 sinking. Dry humor. He seems like a tough, quiet, determined man. Not given to speeches or sentiment. He just does the work.</p>

<p>He is the commander of AS-204. He will be the first person to fly an Apollo spacecraft.</p>

<p>Edward Higgins White II. Lieutenant Colonel, United States Air Force. The man who didn\'t want to come back inside. When McDivitt told him his twenty-three minutes were up on Gemini 4, White said it was the saddest moment of his life. I have thought about that quote many times since. He graduated from West Point, got a master\'s degree in aeronautics from Michigan. He\'s been in the military his whole career but he has a streak of wonder in him — you can see it in the photographs from his spacewalk, the way he\'s grinning under his visor. He loves this. He absolutely loves being in space.</p>

<p>Roger Bruce Chaffee. Lieutenant Commander, United States Navy. I had to look him up, I admit. He was selected as an astronaut in 1963, but he hasn\'t flown yet — this will be his first mission. He\'s thirty-one years old, which makes him the youngest of the three. He flew reconnaissance missions over Cuba during the Missile Crisis, if you can believe it. He\'s from Grand Rapids, Michigan. He loves his family, apparently — there are photographs of him with his wife and two children that have been in the newspapers, and you can see something easy and warm in his face in those pictures. He seems like a good man still at the beginning of his story.</p>

<p>The three of them are preparing to fly Apollo in February. The spacecraft — the Command and Service Module, designated AS-204 — is being tested at Launch Complex 34 at Cape Kennedy. It\'s the redesigned and much improved capsule that will eventually carry men to the Moon. This first mission is called a shakedown: they\'ll orbit the Earth for perhaps two weeks, testing all the systems, proving the spacecraft is ready.</p>

<p>I find myself thinking about what it means that Grissom is doing this. He\'s been in space twice already, survived a sinking capsule, endured unfair criticism, and here he is again: climbing into another spacecraft, accepting all the risks again, doing the job he signed up to do. There\'s something that can only be called courage in that. Not the dramatic kind — not the kind you see in movies. The quiet, daily, deliberate kind. The kind that says: I know the risks and I accept them and I will show up and do my best.</p>

<p>I hope the launch goes well. I hope the mission goes well. I hope all three of them come home.</p>

<p>The Moon is close now. If this first crewed flight works, the next steps can happen. Maybe 1968 for a lunar orbit. Maybe 1969 for a landing. The decade is running out, but we still have time.</p>

<p>I clipped their crew photograph from the paper and added it to the folder. Three men, smiling, in front of their spacecraft. The first Apollo crew.</p>',
];

$posts[] = [
    'date'     => '1967-01-28',
    'title'    => 'A Terrible Friday Afternoon',
    'category' => 'Apollo 1',
    'tags'     => ['apollo-1', 'fire', 'tragedy', 'grissom', 'white', 'chaffee', 'grief'],
    'excerpt'  => 'Gus Grissom, Ed White, and Roger Chaffee are dead. There was a fire on the launch pad yesterday afternoon during a ground test. I heard it on the radio on the way home from work. I had to pull over. I sat in the car for a long time before I could drive again.',
    'content'  => '<p>I don\'t know how to write this entry.</p>

<p>I heard it on the radio on my way home from work yesterday — Friday, January 27th. The announcer said there had been an accident at Cape Kennedy during a ground test. Fire in the Apollo spacecraft on the launch pad. The crew — Grissom, White, Chaffee — were unresponsive. By the time they got the hatches open, all three were dead.</p>

<p>I pulled the car over to the side of the road. I just sat there. I don\'t know how long. The radio kept talking and I stopped hearing it. I was just sitting in my car on Route 7 watching the traffic go by.</p>

<p>Gus Grissom is dead. Ed White is dead. Roger Chaffee is dead.</p>

<p>The spacecraft wasn\'t even going to launch yesterday. It was a plugs-out test — a simulation to verify that the spacecraft could function on its own power, without ground support. They were buttoned up in the capsule, fully pressurized, running through checklists. There had been communication problems earlier in the day. One of the last things Grissom said on the radio, frustrated, was: "How are we going to get to the Moon if we can\'t talk between two or three buildings?"</p>

<p>Those may have been the last words anyone heard him say.</p>

<p>At 6:31 in the evening, a fire started inside the spacecraft. In the pure oxygen atmosphere they used — which they\'ve always used, since Mercury — the fire spread in seconds. The cabin pressure spiked. The inner hatch, which opens inward and requires the pressure to be equalized to open, could not be opened. The crew was trapped inside for the seconds and minutes it took for the fire to do what fire does in a pure oxygen environment.</p>

<p>Ed White, they say, tried to open the hatch. The hatch that you cannot open when the pressure is building, not dropping. He died trying to open it.</p>

<p>I have been sitting here at my desk for the past hour trying to figure out what to write, and all I can think is: I knew who these men were. I had been following them, writing about them, thinking about what they might accomplish. Grissom who survived the sinking capsule and came back for more. White who told McDivitt it was the saddest moment of his life to come back inside. Chaffee who was thirty-one years old and hadn\'t flown yet and had a wife and two children and his whole story still in front of him.</p>

<p>I sat with Betty last night and we didn\'t say much. The kids had gone to bed. We watched the news for a while and then we turned it off because there wasn\'t anything new to learn, just the same facts being repeated. Three men are dead. The spacecraft caught fire. They couldn\'t get the hatch open.</p>

<p>I don\'t know what this means for the program. I suppose the program will stop for a while. They\'ll have to figure out what went wrong. They\'ll have to fix it. But right now all I can think about is three men who accepted all the risks of going to the Moon and died in a spacecraft that was sitting on the ground, during a routine test, without even leaving the Earth.</p>

<p>Gus Grissom. Ed White. Roger Chaffee.</p>

<p>I don\'t have anything else to say today.</p>',
];

$posts[] = [
    'date'     => '1967-02-15',
    'title'    => 'What Went Wrong — What We\'re Learning',
    'category' => 'Apollo 1',
    'tags'     => ['apollo-1', 'fire', 'investigation', 'pure-oxygen', 'spacecraft-design', 'what-went-wrong', 'hatch'],
    'excerpt'  => 'The investigation is underway. The fire started in the pure oxygen atmosphere used in the Apollo cabin. The hatch opened inward and couldn\'t be opened under the internal pressure. There were flammable materials throughout the spacecraft. Reading these reports is difficult. Some of this seems like it should have been obvious before.',
    'content'  => '<p>The preliminary findings are in the newspapers now, and I have been reading everything I can get my hands on. I want to understand what happened. I owe them that much, I think — the men who died. Understanding what went wrong is the beginning of making sure it doesn\'t happen again.</p>

<p>Here is what the investigation is finding:</p>

<p>The atmosphere inside the Apollo command module during ground testing was pure oxygen at a pressure slightly higher than sea level air. This is the atmosphere they\'ve been using since Mercury. In pure oxygen, things that would smolder in regular air burn quickly and intensely. Everything is more flammable. A spark that would go out instantly in normal air becomes a disaster in pure oxygen.</p>

<p>The spacecraft had an enormous amount of flammable material inside it. Velcro was everywhere — astronauts used it to stick things to the walls, to hold equipment in place. Nylon netting. Foam padding. Wiring with plastic insulation. The inside of the spacecraft was, in retrospect, something like a tinderbox sitting in a pure oxygen atmosphere at elevated pressure.</p>

<p>The hatch. The Apollo hatch opened inward, and required the crew to equalize the internal and external pressure before they could open it. Under normal conditions, this took about ninety seconds. But when the fire started, the internal pressure spiked rapidly as the fire consumed oxygen and generated heat. The higher the pressure differential, the harder the hatch became to open. Ed White died trying to open it. By the time the pad crew outside managed to open it — which took about five minutes after the fire — it was too late.</p>

<p>The source of the ignition hasn\'t been pinpointed exactly. There was a bundle of wiring in the lower-left area of the cabin that showed signs of arcing. There had been problems with wiring chafing in the spacecraft for months — quality control issues at North American Aviation, the contractor that built the Command Module. Congress is looking into this. There are reports of serious quality problems in the spacecraft manufacturing process, of corners cut, of issues flagged and not fixed.</p>

<p>I have to be honest: reading all of this is infuriating. Not at any one person. At the system. At the combination of a pure oxygen atmosphere and flammable materials and a hatch that couldn\'t be opened under pressure and wiring that wasn\'t right and pressure from above to meet the launch schedule. Any one of these factors alone might not have been fatal. Together they were.</p>

<p>What makes it worse is the knowledge that some of this — not all, but some — was known. Grissom himself had complained about the quality of the spacecraft. He had famously hung a lemon on the simulator in the building. He was not happy with the state of the spacecraft.</p>

<p>He was right. He was right and he died in it anyway, because that is the contract these men signed. They accept the risks. They trust the engineers and the contractors and the managers to have done their jobs. Sometimes the trust is misplaced.</p>

<p>The program is stopped now. NASA has created a review board. Congress is investigating. North American Aviation is being examined carefully. Everything will be redesigned — the hatch first, so it opens outward and quickly. The flammable materials will be replaced with fireproof ones. The atmosphere in the cabin during ground testing will be changed.</p>

<p>Grissom, White, and Chaffee died because of design flaws that were not corrected in time. Their deaths are going to force corrections that will make the spacecraft safer for everyone who follows them. This is not a comfort exactly. But it\'s what I keep trying to hold onto.</p>

<p>They were right there. They were on the ground, in a spacecraft that was going to go to the Moon eventually, and they never got to go. They never got to see what they had been training for.</p>

<p>I\'m angry. I think I have a right to be angry.</p>',
];

$posts[] = [
    'date'     => '1967-11-09',
    'title'    => 'The Saturn V Shook the Earth',
    'category' => 'Technology',
    'tags'     => ['apollo-4', 'saturn-v', 'unmanned', 'test', 'first', 'sound', 'power', 'f-1-engine'],
    'excerpt'  => 'The Saturn V rocket fired for the first time today. Unmanned. All five engines. 7.5 million pounds of thrust. They say people thirty miles away felt it in their chests. They say the sound cracked windows. The cameras at the press site showed the shock wave rolling toward them through the grass. I watched on television and could barely sit still.',
    'content'  => '<p>The Saturn V flew today.</p>

<p>Not with people aboard — this was the first unmanned test, called Apollo 4. But the Saturn V itself, the rocket that will carry Americans to the Moon, left the ground under its own power for the first time this morning at 7:00 AM Eastern, and it worked. It worked perfectly.</p>

<p>I watched on television. The launch coverage was extensive, and when the time came — when the five F-1 engines at the base of this impossibly tall machine ignited — the cameras showed the shock wave rolling outward from the pad through the scrub grass. It hit the press area, three and a half miles away, and the reporters lurched. Cameras shook. The sound came through the television speakers as a wall of noise, a deep chest-vibrating rumble that I could feel even through the television set in my living room.</p>

<p>And I was in my house, hundreds of miles from Florida.</p>

<p>They say people on Cocoa Beach felt it in their sternums. They say windows cracked in nearby buildings. They say the birds in the surrounding area went silent for minutes afterward. When seven and a half million pounds of thrust ignite thirty-six stories of rocket, the world notices.</p>

<p>Let me try to put the Saturn V\'s size in terms that mean something. It\'s 363 feet tall. The Statue of Liberty from base to torch is 305 feet. This rocket is taller than the Statue of Liberty. It weighs six and a half million pounds fully fueled, nearly all of it propellant. The first stage alone burns through 20 tons of fuel — kerosene and liquid oxygen — every second. Every second.</p>

<p>The five F-1 engines in that first stage each produce 1.5 million pounds of thrust. Each one. Together they produce 7.5 million pounds. For comparison, the Redstone that launched Shepard in 1961 produced 78,000 pounds of thrust. The Saturn V is nearly a hundred times more powerful.</p>

<p>I find I can write these numbers but I can\'t quite make them real in my mind. They\'re just numbers. Ninety-six times as powerful. What does that mean? What does 7.5 million pounds of thrust feel like? I don\'t think there\'s a human analogy. You just have to watch it go.</p>

<p>Today\'s test sent an unmanned Command and Service Module to high altitude and brought it back through reentry, testing the heat shield. The CM reached 25,000 feet per second on reentry — the speed at which it will be coming back from the Moon. The heat shield held. The parachutes deployed. The capsule landed in the Pacific right on target.</p>

<p>The whole thing worked on the first try. The most powerful rocket ever built, flying for the first time, flew a successful mission on the first attempt.</p>

<p>I have been following this program since 1961. I have watched every Mercury flight and every Gemini flight. I have watched the tragedy of Apollo 1 and the nine months of silence and rebuilding that followed. I have believed through all of it that we were going to get there.</p>

<p>Today, watching five F-1 engines light up and push 363 feet of rocket off the pad and into the sky, I feel something shift. Not doubt becoming certainty — certainty was never there to begin with, and I am too realistic to claim it now. But probability. The probability is moving. The Moon is getting reachable in a way it wasn\'t yesterday.</p>

<p>The Saturn V flew. It worked. The engine is ready.</p>

<p>Now put people in it.</p>',
];

$posts[] = [
    'date'     => '1968-06-01',
    'title'    => 'Eighteen Months Later — I Think They\'re Ready',
    'category' => 'Apollo 1',
    'tags'     => ['apollo-1', 'recovery', 'rebuild', 'confidence', 'anticipation', 'apollo-7', 'redesign'],
    'excerpt'  => 'Eighteen months since the fire. The spacecraft has been redesigned — new quick-opening hatch, new materials, 1,341 engineering changes. The Saturn V has been tested twice. Apollo 7 will carry men for the first time in a few months. I find myself thinking about Grissom again. I think he would want them to keep going.',
    'content'  => '<p>Eighteen months ago Gus Grissom, Ed White, and Roger Chaffee died in a fire in their spacecraft on Launch Pad 34. This is not something I think about every day anymore, but it is something I think about often enough that I know exactly how many months it has been.</p>

<p>In those eighteen months, NASA has done an enormous amount of work. I\'ve been following the reports as they come out, and let me try to describe what\'s changed.</p>

<p>The hatch is new. The old hatch opened inward — toward the crew — and could not be opened under the elevated internal pressure. The new hatch opens outward, and it can be opened in seven seconds. Seven seconds. That\'s the most important single change, and it happened before anything else.</p>

<p>The atmosphere is different. During ground testing, the cabin is now pressurized with a nitrogen-oxygen mixture rather than pure oxygen. Pure oxygen at elevated pressure turns everything into kindling; nitrogen-oxygen at sea level pressure behaves much more like the air we breathe. When they\'re in orbit, they\'ll still use oxygen (you can\'t carry the weight of nitrogen into space), but on the ground, the dangerous situation — pressurized pure oxygen with human beings sealed inside — is gone.</p>

<p>The materials inside the spacecraft have been changed. The Velcro, the foam, the nylon netting that burned so readily — replaced with materials that don\'t burn or burn very slowly. NASA conducted burn tests on hundreds of materials and built a library of what\'s safe for use inside the spacecraft. Whoever flies Apollo next will be sitting in a cabin that has been examined for fire risk down to the wire bundle and the access panel latch.</p>

<p>1,341 engineering changes. That\'s the number I\'ve seen reported. Thirteen hundred and forty-one specific modifications to the spacecraft between January 1967 and now. The Command Module that will fly in the fall is not the same spacecraft that burned on the pad. It bears the same name but it is a substantially different machine.</p>

<p>The Saturn V has now flown twice — Apollo 4 last November and Apollo 6 in April. Apollo 6 had some problems (two second-stage engines failed due to oscillations called "pogo"), but the spacecraft survived and the mission was completed. NASA believes they\'ve solved the pogo problem. I hope they\'re right.</p>

<p>Wally Schirra\'s crew — Schirra, Donn Eisele, and Walt Cunningham — will fly the first crewed Apollo mission, probably in October. They\'ll fly the Saturn IB, not the full Saturn V; this mission is Earth orbit only, testing the Command Module with people aboard. Can men actually fly this thing? Does everything work with humans inside? That\'s what AS-204 — now called Apollo 7 — will answer.</p>

<p>I keep thinking about Grissom. Not in a morbid way, but in the way you think about someone you followed for years. He would have been first. He was supposed to be first. He was chosen as commander of the first crewed Apollo precisely because he was the best person for that job — experienced, tough, a realist who would push back when something was wrong. He pushed back. He hung a lemon on the simulator. He complained about the quality. And then he died in the thing he had complained about.</p>

<p>I\'ve asked myself many times whether he would want them to continue. Whether Grissom, if he could say anything about it now, would say: stop. This isn\'t worth it. No more men in these machines.</p>

<p>I don\'t know. I never met the man. But from everything I\'ve read about him — the stubbornness, the practicality, the absolute commitment to the mission — I think he would say: figure out what went wrong. Fix it. And go.</p>

<p>I think that\'s what they\'ve done. I think they\'re ready. I think, when Schirra\'s crew climbs into that redesigned spacecraft in the fall, they\'ll be climbing into something that honors what happened eighteen months ago by being better because of it.</p>

<p>That\'s not nothing. It\'s not enough. But it\'s not nothing.</p>',
];

$posts[] = [
    'date'     => '1968-10-11',
    'title'    => 'They\'re Going Up Again',
    'category' => 'Apollo 7',
    'tags'     => ['apollo-7', 'wally-schirra', 'donn-eisele', 'walter-cunningham', 'first-crewed-apollo', 'first', 'return'],
    'excerpt'  => 'Apollo 7 launched this morning. For the first time since the fire twenty-one months ago, American astronauts are in space. Wally Schirra, Donn Eisele, and Walt Cunningham rode a Saturn IB into orbit and the spacecraft worked. I watched from home. I was not entirely certain, until I saw the pictures of the crew in orbit, that I believed it.',
    'content'  => '<p>For the first time in twenty-one months, American astronauts are in space.</p>

<p>I said this aloud to Betty when the announcer confirmed that Apollo 7 had reached orbit successfully this morning. She said, "Twenty-one months?" and I said yes — since the fire on January 27th, 1967, there has been no American in space. Twenty-one months of redesign and testing and grief and argument and rebuilding and more testing, and now Wally Schirra, Donn Eisele, and Walt Cunningham are in orbit aboard a spacecraft that is not the same spacecraft that killed Grissom and White and Chaffee, but looks like it from the outside, and has the same name on the side.</p>

<p>The launch was at 11:02 AM Eastern on a Saturday, which meant I was home to watch. The Saturn IB — not the full Saturn V, just the two-stage Earth-orbit variant — lifted off cleanly. No problems on the pad. No problems at staging. The spacecraft separated from the rocket, and then there were men in orbit.</p>

<p>I\'m not going to pretend I wasn\'t worried. I\'ve been worried since they announced the launch date. We\'ve done all the work, they\'ve made all the changes — but you can only be so certain until someone actually gets in the thing and flies it. You can test every system in every configuration and you still don\'t know what you don\'t know.</p>

<p>What I know now: the capsule reached orbit. It performed a rendezvous with the spent Saturn IB upper stage. The crew reported all systems nominal. They are in space. They are alive. The spacecraft works.</p>

<p>I went outside after the confirmation came through and stood in the yard for a few minutes. October morning, still warm, the leaves just starting to turn. It was a beautiful day. And somewhere up above the cloud layer — much too high to see, moving at 17,500 miles per hour — three American astronauts were flying a redesigned Apollo spacecraft for the first time.</p>

<p>About Schirra: this is his third spaceflight. He flew Mercury (Sigma 7) and Gemini (Gemini 6A, the rendezvous mission). He\'s fifty-two missions\'s worth of experience in a single person, if you count it by his flights. He\'s known to be difficult — demanding, opinionated, not inclined to suffer fools. He fought with NASA management over the mission plan repeatedly. He is not a public relations astronaut; he is a mission astronaut, and he believes the mission comes first.</p>

<p>He\'s the right man to fly the first crewed Apollo. Not because he\'s charming — he is famously not charming when he thinks someone is doing something wrong — but because he will demand that everything work correctly, and if it doesn\'t work correctly, he will say so. Loudly and clearly and without concern for politics. That is exactly what you want from the commander of the first crewed test flight of a spacecraft that killed the last crew that tried to fly it.</p>

<p>They\'re planning eleven days in orbit. Eleven days. This spacecraft has to prove it can sustain three men for the length of a full Moon mission — launch, transit, lunar orbit, return, everything.</p>

<p>I am going to follow this mission very closely. I\'ll be by the radio when I\'m not at work, and possibly when I am at work.</p>

<p>We\'re back. American astronauts are in space. We lost three men and we stopped and we rebuilt and we came back. I thought this was what would happen. It is nonetheless a relief to know that it is.</p>

<p>Welcome back, gentlemen. Please come home safe.</p>',
];

$posts[] = [
    'date'     => '1968-10-22',
    'title'    => 'Apollo 7 Is Home — We\'re Back',
    'category' => 'Apollo 7',
    'tags'     => ['apollo-7', 'splashdown', 'success', 'apollo', 'return', 'television', 'first-live-tv', 'schirra'],
    'excerpt'  => 'Eleven days in orbit. All systems tested. Three men home safe. Schirra had a head cold the whole time, which made him even more cantankerous than usual with Mission Control. But more importantly: they broadcast live television from space for the first time. The picture was shaky. The men were real.',
    'content'  => '<p>Apollo 7 splashed down this morning in the Atlantic after eleven days in orbit. Wally Schirra, Donn Eisele, and Walt Cunningham are safely aboard the recovery ship. The mission is complete.</p>

<p>The redesigned spacecraft works. I want to say that plainly before anything else. Every major system — the environmental control, the fuel cells, the guidance and navigation, the engine — was tested and worked. Eleven days in space. Three men alive. Mission objectives accomplished.</p>

<p>There will be time for the detailed technical debrief. For now let me say two things that stood out to me during the mission.</p>

<p>First: Schirra has a cold. He has had a cold since the early days of the mission, which in the weightless environment of the spacecraft means the mucus has nowhere to drain — it just fills his sinuses. This is apparently extremely unpleasant. Schirra has been in a legendarily foul mood for most of the mission, which expresses itself in terse radio exchanges with Mission Control and pushback on nearly everything they\'ve asked him to do. At one point they asked him to do a TV broadcast without helmets on, which Schirra refused because of the pressure changes in his sinuses — he needed the helmets available for reentry, and with his stuffed sinuses, he was worried about what the pressure change during reentry would do to his eardrums without a helmet to equalize the pressure. Mission Control pushed. Schirra pushed back. Schirra won. He will be taking off his helmet for reentry and he will be fine and his ears will not explode. He was right. He is often right.</p>

<p>Second, and this is the thing that I think will matter to history: for the first time, Americans watched live television from inside an American spacecraft. The crew did several broadcasts, holding up a hand-lettered sign that read "KEEP THOSE CARDS AND LETTERS COMING IN FOLKS" — a joke, a light moment, astronauts being human and funny from orbit. The picture was shaky and black and white and the resolution was not wonderful. But it was real. Those were real men, in a real spacecraft, 225 miles above the Earth, looking at a camera and talking to us.</p>

<p>I\'m not going to dismiss how much that matters. The space program has always been something that happens in our newspapers and on our radios — descriptions of things we can\'t see, confirmation of events we can only imagine. But when they pointed that camera at Schirra and he looked directly into it and waved, something changed. It wasn\'t abstract anymore. He was right there. He was in space and he was right there and he was waving.</p>

<p>The mission is done. The spacecraft works. The crew is home. Schirra is apparently very happy to have his sinuses draining normally again.</p>

<p>What comes next: Apollo 8. They haven\'t announced exactly what it will be — there\'s been talk of flying the Lunar Module in Earth orbit, testing the LM for the first time with people aboard. But there are also rumors of something bolder. Something I can barely let myself think about yet.</p>

<p>Let me just sit with the success of Apollo 7 for today. One crewed Apollo mission, complete. The spacecraft works. The crew is home. Twenty-one months after the fire, we are back in space.</p>

<p>Grissom would recognize this spacecraft, I think. He complained about the old one. He was right to complain. This new one works.</p>

<p>I believe we\'re going to the Moon.</p>',
];

$posts[] = [
    'date'     => '1968-12-21',
    'title'    => 'They\'re Going to the Moon — Not to Orbit the Earth',
    'category' => 'Apollo 8',
    'tags'     => ['apollo-8', 'moon', 'lunar-orbit', 'frank-borman', 'jim-lovell', 'bill-anders', 'christmas', 'first-lunar-orbit', 'announcement'],
    'excerpt'  => 'Apollo 8 launched this morning and they are not going to Earth orbit. They are going to the Moon. Frank Borman, Jim Lovell, and Bill Anders are riding the Saturn V to lunar orbit. For the first time in history, human beings are leaving Earth to go to another world. I cannot sit still.',
    'content'  => '<p>They changed the mission.</p>

<p>It was announced a few months ago, but it still doesn\'t feel real. Apollo 8 was supposed to be a test of the Lunar Module in Earth orbit — the same kind of cautious, incremental step that has characterized the whole program. But the Lunar Module isn\'t ready. And there are reports that the Soviets might be planning something dramatic — another first. A circumlunar flight, maybe. Going around the Moon and coming back.</p>

<p>So NASA made a decision: Apollo 8 goes to the Moon. Not around it — to it. Into orbit. Borman\'s crew will ride the Saturn V out of Earth orbit, coast for three days across 240,000 miles of space, fire their engine to enter lunar orbit, orbit the Moon ten times, fire their engine again to come home, and splash down in the Pacific on December 27th.</p>

<p>If everything works.</p>

<p>The Saturn V ignited at 7:51 this morning. I watched it go up. The fire below the rocket, the slow rise that becomes fast before you expect it, the bright point climbing into the December sky. Then they announced: the S-IVB has fired. Trans-lunar injection is complete. The spacecraft is committed to the Moon.</p>

<p>Frank Borman, Jim Lovell, and Bill Anders are going to the Moon.</p>

<p>In the history of the human race, no one has ever done what they are doing right now. Every human being who has ever lived has lived on Earth or — since 1961 — briefly above it in orbit. But everyone who has gone to orbit has stayed near Earth, in the gravity well, within a few hundred miles. These three men are pointed away from Earth, accelerating outward, and in three days they will be near the Moon.</p>

<p>No one has ever been that far from Earth. No one has ever looked back at our planet from that distance. No one has ever seen the Moon from close enough to see its craters by eye, to see the surface up close, to orbit and look down at the landscape.</p>

<p>I keep trying to understand what they\'ll see. Three days of travel, Earth shrinking behind them. Then the Moon growing larger in front of them. The far side of the Moon — which no human eye has ever seen from close up, only photographed by probes. They\'ll fly over it. They\'ll look down at it.</p>

<p>And they\'ll do this at Christmas. They\'re scheduled to be in lunar orbit on Christmas Eve. December 24th, 1968. I keep imagining what they\'ll see when they look: the Earth rising above the horizon of the Moon. Our planet, small and blue and brilliant, hanging in the black. From 240,000 miles away.</p>

<p>Betty asked me tonight if I thought they\'d make it. I said I thought so — I think the rocket works, I think the spacecraft works, I think the navigation system works. But I also said: the engine that puts them into lunar orbit has to fire on the back side of the Moon, out of radio contact with Earth. For six minutes, we won\'t know. If it doesn\'t fire correctly, they\'ll sail past the Moon and have to come home the long way. If it fires too long, they could be trapped in lunar orbit with no way home. The burn has to be exactly right.</p>

<p>She nodded and said: I\'m going to watch for the signal when they come around the Moon on Christmas Eve. I said we both will. I said the whole world probably will.</p>

<p>They\'re going to the Moon. Today. Right now. Three days from now they\'ll be there. I can barely sit still enough to write this.</p>',
];

$posts[] = [
    'date'     => '1968-12-24',
    'title'    => 'Christmas Eve at the Moon',
    'category' => 'Apollo 8',
    'tags'     => ['apollo-8', 'earthrise', 'moon-orbit', 'christmas', 'genesis', 'first-lunar-orbit', 'wonder', 'television'],
    'excerpt'  => 'On Christmas Eve 1968, three American astronauts in orbit around the Moon read from the Book of Genesis. Before they read, Bill Anders took a photograph. He called out: "Oh my God, look at that picture over there!" He had seen the Earth rising above the lunar horizon. Earthrise. The most important photograph ever taken.',
    'content'  => '<p>I am going to try to write down what tonight felt like, because I don\'t think I will ever feel anything quite like it again and I want to have a record.</p>

<p>Apollo 8 is in lunar orbit. Frank Borman, Jim Lovell, and Bill Anders have been orbiting the Moon since yesterday. They are 240,000 miles from Earth, circling another world at roughly 3,600 miles per hour, close enough to the surface to see individual craters by eye. No human being has ever been there before.</p>

<p>This evening, on Christmas Eve, they did a live television broadcast from lunar orbit.</p>

<p>The picture came through on our television — better than I expected, actually, considering it was being transmitted from the Moon. Black and white, somewhat grainy, but recognizable. The surface of the Moon scrolling past as the spacecraft orbited. The crew spoke. They talked about what they could see — the craters, the maria, the strange beauty of a world without atmosphere, without color, without life. Every surface feature casting sharp shadows because there\'s nothing to scatter the light. The Moon in stark black and white and gray, exactly as the photographs show it but experienced now by three men actually there.</p>

<p>And then they read from Genesis.</p>

<p>Anders first, then Lovell, then Borman. Not the whole book — the first ten verses. "In the beginning God created the heaven and the earth. And the earth was without form, and void; and darkness was upon the face of the deep..." They took turns reading, one verse at a time, from 240,000 miles away, in orbit around the Moon, on Christmas Eve.</p>

<p>I am not a religious man in any organized sense. I go to church occasionally, mostly for the community of it. But sitting in my living room with Betty and the kids watching Christmas Eve come in on the television, listening to three astronauts read from Genesis while the Moon\'s surface rolled past their window — something in me went very quiet. Something felt, I don\'t know how else to say it, like it fit. Like this was the right moment for this reading. The first chapter of Genesis is about creation, about the deep and the formless and light being made from darkness. And here were three men at creation — or something like it — looking at a world before life, the ancient Moon, and reading the oldest words we have about beginnings.</p>

<p>Borman ended the broadcast: "And from the crew of Apollo 8, we close with good night, good luck, a Merry Christmas, and God bless all of you — all of you on the good Earth."</p>

<p>All of you on the good Earth.</p>

<p>A photograph was taken today — Bill Anders took it when he looked out the window and saw it. Earth, rising above the lunar horizon. Our planet — blue and white and brilliant against the absolute black of space — coming up above the gray and ancient surface of the Moon. I haven\'t seen the photograph yet; it\'ll be developed and released later. But the crew described it. Earth rising over the Moon.</p>

<p>Earthrise. That\'s what they\'re calling it. I imagine it will be the most important photograph ever taken. I imagine it will be on the front page of every newspaper in the world. I imagine that everyone who sees it will feel, for a moment, what the crew of Apollo 8 felt when they looked out the window and saw our home, small and blue and fragile and impossibly beautiful, hanging in the dark.</p>

<p>Tomorrow — Christmas Day — they fire the engine and come home. The engine burns on the far side of the Moon, out of radio contact. We\'ll hold our breath for six minutes. Then we\'ll hear if the burn worked.</p>

<p>But tonight: three men in lunar orbit read Genesis on Christmas Eve. And somewhere in the black sky above my house, our planet turned, and somewhere out there was the Moon, and somewhere near the Moon was a tiny spacecraft with three men in it who had seen the Earth rise above the lunar horizon.</p>

<p>I don\'t have the words for what this year ended up being. I\'ll try to find them later. Tonight I just want to sit with it.</p>

<p>Merry Christmas. From the good Earth.</p>',
];

$posts[] = [
    'date'     => '1969-05-22',
    'title'    => 'They Were RIGHT THERE',
    'category' => 'Apollo 10',
    'tags'     => ['apollo-10', 'lunar-module', 'descent', '8-miles', 'lunar-surface', 'cernan', 'stafford', 'dress-rehearsal', 'frustration'],
    'excerpt'  => 'Tom Stafford and Gene Cernan flew the Lunar Module down to 47,000 feet above the Moon today. Eight-point-four nautical miles. They could see the craters. They could see where Apollo 11 will land. They were RIGHT THERE. And then they flew back up. I respect the mission plan. I am also deeply frustrated.',
    'content'  => '<p>Tom Stafford and Gene Cernan flew the Lunar Module called Snoopy down to 47,000 feet above the surface of the Moon today. Forty-seven thousand feet. Eight point four nautical miles. If you\'re standing on the lunar surface looking up, they were about the height of a commercial airliner above you.</p>

<p>They looked down. They could see the Sea of Tranquility — the planned landing site for Apollo 11. They could see individual craters. The surface was close enough that the mission transcript records Cernan saying things like "there\'s a crater right there" — like a man on a low-flying airplane spotting landmarks below. They were close enough that the texture of the surface was visible. They were RIGHT THERE.</p>

<p>And then the mission plan called for them to fire the ascent engine and go back up. So they did.</p>

<p>I understand the logic. I do. This was the dress rehearsal. The point was to test every single step of the landing process EXCEPT the landing itself, so that when Apollo 11 comes through in July, there are no unknowns. Stafford and Cernan tested the descent engine, the navigation, the rendezvous radar, the communication systems, the abort procedures — everything that needs to work perfectly in two months. And it all worked. John Young, orbiting alone in Charlie Brown, watched Snoopy descend and ascend and rendezvous. Every system was verified. The data is being analyzed right now.</p>

<p>I understand all of this. The mission plan is correct. This is the right way to do it.</p>

<p>And yet.</p>

<p>Eight point four nautical miles. You could have landed. The descent engine works — they proved it. The landing radar works. The navigation works. Stafford is one of the best pilots in the program. Cernan is no less than that. They were right there, close enough to see the landing site, and mission parameters said: not today.</p>

<p>There is a story — I don\'t know if it\'s true — that NASA purposely put only enough fuel in the ascent stage to prevent an unauthorized landing. That the planners didn\'t entirely trust the crew to follow orders when they were 47,000 feet above a surface they had never been closer to. I choose to believe this story is apocryphal. I choose to believe Stafford and Cernan followed the plan because they are professionals who understood the reasoning and honored it.</p>

<p>But I also think Gene Cernan, specifically, looked down at that surface from eight miles up and felt something that no mission plan can fully accommodate. He was so close. He could see it. There\'s a picture in his mind now — the Moon, close, textured, real — that he\'ll carry for the rest of his life. He had to go back up.</p>

<p>Cernan reportedly swore a good deal during the ascent, which I find entirely relatable.</p>

<p>Apollo 10 is a success. A complete, thorough, by-the-numbers success. Every piece of the puzzle is in place except one: the landing itself. And that piece is now assigned to Neil Armstrong and Buzz Aldrin, who will fly the Lunar Module called Eagle in July.</p>

<p>Everything is ready. The dress rehearsal is done. The Moon is waiting. The decade is more than half over — Kennedy said before the decade is out, and it\'s 1969. July is coming.</p>

<p>I keep looking at the sky in the evenings lately. The Moon is there most nights. I look at it differently now than I did a year ago. It\'s not abstract anymore. Men have orbited it. Men have been eight miles above its surface. Men have looked down at the Sea of Tranquility from altitude and seen the spot where they plan to land.</p>

<p>I can barely sleep. Is that ridiculous? I can barely sleep.</p>',
];

$posts[] = [
    'date'     => '1969-07-16',
    'title'    => 'Launch Day',
    'category' => 'Apollo 11',
    'tags'     => ['apollo-11', 'launch', 'saturn-v', 'kennedy-space-center', 'history', 'july-16-1969', 'armstrong', 'aldrin', 'collins'],
    'excerpt'  => 'This morning the Saturn V carrying Neil Armstrong, Buzz Aldrin, and Michael Collins lifted off from Pad 39A at Kennedy Space Center. The engine ignited at 9:32 AM. They are going to the Moon. I watched with my family and none of us spoke when the rocket rose. There are no words for some things.',
    'content'  => '<p>I don\'t know how to begin this entry.</p>

<p>At 9:32 AM Eastern time this morning, July 16th, 1969, the Saturn V carrying Apollo 11 — carrying Neil Armstrong, Buzz Aldrin, and Michael Collins — rose from Launch Pad 39A at Kennedy Space Center. The five F-1 engines ignited. The hold-down arms released. And the tallest, heaviest, most powerful machine ever built by human beings began to move.</p>

<p>We watched as a family. Betty and I on the couch. The kids — they\'re teenagers now, old enough to understand what they were watching — on the floor in front of us. We had tried to watch Apollo launches together before, but this one felt different. This one felt like we had somehow known for a long time that it was coming and now it was here. We didn\'t talk when the countdown reached zero. We didn\'t cheer. We just watched.</p>

<p>The television cameras at the launch site are positioned several miles back — you can\'t be closer without the acoustic blast from the engines potentially damaging your hearing or your equipment. So you see the rocket on the pad, and then you see the exhaust cloud building, and then you see this enormous thing begin to rise, slowly at first, impossibly slowly for something with 7.5 million pounds of thrust, and then faster, and then very fast, and then it\'s climbing and you\'re watching a spacecraft the size of a naval destroyer accelerate into the sky.</p>

<p>My daughter grabbed my hand when the rocket cleared the tower. I didn\'t let go.</p>

<p>There were a million people on the beaches and roads of Florida to watch it. A million. They say the sound could be felt 100 miles away. The light was visible for much farther. People were crying in the crowd — you could see them on the television, faces turned up, tears on their cheeks, strangers standing next to strangers watching the same thing.</p>

<p>Twelve minutes after liftoff, the crew was in Earth orbit. Ninety minutes later, the S-IVB stage fired for the second time — the Trans-Lunar Injection burn. Neil Armstrong\'s voice came through the speakers, calm as a man reporting the weather: "Hey Houston, Apollo 11. This Saturn gave us a magnificent ride."</p>

<p>They\'re on their way to the Moon. Three days from now, they\'ll be there. Monday, July 20th, if everything holds together — if the Lunar Module descends correctly, if the navigation is right, if the landing site is smooth enough — Neil Armstrong and Buzz Aldrin will land on the Moon. Michael Collins will stay in orbit.</p>

<p>I have been following this program since April 1961 when Gagarin went to space and I sat at my kitchen table with my fork in mid-air. Eight years. I\'ve watched every flight, clipped every article, listened to every broadcast I could find. I\'ve watched men die in a fire on a launch pad. I\'ve watched the program stop and rebuild and come back. I\'ve watched the Saturn V shake the Earth. I\'ve watched Borman\'s crew read Genesis from lunar orbit on Christmas Eve.</p>

<p>And now, on a Wednesday morning in July 1969, three men are on their way to the Moon. They will be there in four days. One of them — maybe. If everything works. If nothing breaks. If the engine fires at the right time and the computer makes the right calls and the pilots do what only they can do.</p>

<p>I cannot think straight. I tried to work this afternoon and couldn\'t focus. Betty said I should just take the rest of the week off. The kids will be home from school. We\'ll watch it together, all of us.</p>

<p>The Moon is up tonight. I walked outside and looked at it. Full and bright in the July sky. In four days, there will be men on it. In four days, if everything holds, that ancient light will fall on two human beings standing on its surface.</p>

<p>I came back inside. I couldn\'t look at it for too long. I was already holding my breath, and they haven\'t even started the descent yet.</p>',
];

$posts[] = [
    'date'     => '1969-07-20',
    'title'    => 'The Eagle Has Landed',
    'category' => 'Apollo 11',
    'tags'     => ['apollo-11', 'landing', 'eagle', 'sea-of-tranquility', 'first', 'july-20-1969', '1202-alarm', 'history', 'moon-landing', 'armstrong', 'aldrin', 'scary-moment'],
    'excerpt'  => 'Sunday, July 20th, 1969. At 4:17 PM Eastern time, Neil Armstrong and Buzz Aldrin landed the Lunar Module Eagle in the Sea of Tranquility. Armstrong said: "Houston, Tranquility Base here. The Eagle has landed." I was in my living room. I am not ashamed to say I could not speak for at least two minutes.',
    'content'  => '<p>I don\'t have enough words. I\'ve been sitting here for an hour trying to write this and every time I start I stop because the words feel too small. But let me try to tell you what happened today, because I need to have this written down. I need to have a record of what this day was like.</p>

<p>It was a Sunday. We had been up late the night before watching the coverage — the lunar orbit insertion, the separation of the Eagle from Columbia, the preliminary checks. Michael Collins had put the two spacecraft in different orbits and checked everything twice. Everything was working. On Sunday morning we went to church, came home, and by noon we were back in front of the television. The kids were there. Betty made sandwiches that I don\'t think anyone actually ate.</p>

<p>The powered descent began at 3:08 PM Eastern. The descent engine — the one engine in the whole mission that cannot be tested or retested, that has to work on the first try — ignited. The Eagle started down. From orbit, sixty miles above the surface, descending in a long, shallow arc toward the Sea of Tranquility.</p>

<p>I was listening to the audio from Mission Control on a radio I\'d put next to the television. Every transmission from Armstrong and Aldrin. Every response from Charlie Duke at the CapCom position. The calm voices. The technical language I had spent eight years learning to understand.</p>

<p>And then, about six minutes into the descent: "Program alarm. It\'s a 1202."</p>

<p>Armstrong\'s voice, calm but with something in it, asking Mission Control what the 1202 alarm meant. A 1202. I didn\'t know what a 1202 was. I reached for my notebook — I had been taking notes — and wrote it down. 1202. What is 1202?</p>

<p>There were four or five seconds of silence from Mission Control that felt like they lasted hours.</p>

<p>Then Charlie Duke: "Roger. We\'re GO on that alarm."</p>

<p>They were continuing. Mission Control had cleared the 1202 and they were continuing the descent. I learned later — much later, reading the technical accounts — what a 1202 was: an executive overflow alarm in the guidance computer. The computer was getting more data than it could process and was dropping lower-priority tasks to focus on the critical navigation calculations. A flight controller named Steve Bales, twenty-six years old, who had memorized alarm codes during simulations, recognized the 1202 as one that could be ignored if it cleared itself. He called it. They continued.</p>

<p>More alarms. 1202 again. 1201. Each time, the same response: GO. Continue. The young man at the guidance console had done his homework and in the critical moment he was right.</p>

<p>The descent continued. Lower. Slower. Five hundred feet above the surface. Two hundred feet. They were in the landing phase now — Armstrong had taken manual control to fly over a boulder field that wasn\'t on the maps. He was flying the Eagle manually, looking for a clear patch of ground. The altimeter readings were coming: one hundred feet. Seventy-five. Fifty.</p>

<p>Charlie Duke: "Sixty seconds." That was fuel remaining. Sixty seconds of fuel left. If they didn\'t land in sixty seconds, they would have to abort — fire the ascent engine and go back to orbit, abandoning the landing.</p>

<p>Twenty-five feet. Dust kicking up around the landing legs, blowing outward, obscuring the radar altimeter. Thirty seconds of fuel.</p>

<p>Then: "Contact light." One of the probes dangling below the landing pads had touched the surface. Armstrong cut the engine. There was a moment — a fraction of a second — of complete silence on the audio.</p>

<p>"Houston, Tranquility Base here. The Eagle has landed."</p>

<p>In my living room on this Sunday afternoon in July, I stopped breathing entirely for some unknown number of seconds. Betty made a sound I have never heard her make before or since. My son said something, I don\'t remember what. My daughter covered her mouth with both hands. And I — I sat there in my chair, looking at the television, where Charlie Duke was saying something in a voice that was barely under control, something about being "a bunch of guys about to turn blue," and I could not move. I could not speak. I could not do anything at all for at least two minutes.</p>

<p>They were on the Moon.</p>

<p>Two men were on the surface of the Moon. At this precise moment, as I sat in my living room on a Sunday afternoon in July 1969, Neil Armstrong and Buzz Aldrin were sitting in a spacecraft that was resting on the surface of another world, 240,000 miles from Earth. The landing legs were down. The engine was off. The dust was settling around them. They were there.</p>

<p>I have been waiting for this moment — not waiting exactly, because I didn\'t know it would come, I only hoped — for eight years. Since Gagarin, since Shepard, since Kennedy stood up and said before the decade is out. The decade ends in seven months. We made it. We did it. We went to the Moon.</p>

<p>I will write more tomorrow about the moonwalk, about Armstrong\'s first step. But right now, at 4:17 PM on July 20th, 1969, I just want to say: The Eagle has landed. Two men are on the Moon. We went to the Moon. We actually went.</p>

<p>I walked outside after the initial hubbub died down. It was late afternoon, still bright. The Moon wasn\'t visible yet — it wouldn\'t be up until later. But I stood in my yard and I knew it was up there, and I knew that on its surface, in the Sea of Tranquility, there was a small, angular spacecraft with two men inside it, and the landing pads were resting on the surface, and the flag would go up soon, and the footprints would be made.</p>

<p>The Moon is not just a light anymore. It\'s a place. We\'ve been there.</p>',
];

$posts[] = [
    'date'     => '1969-07-21',
    'title'    => 'One Small Step',
    'category' => 'Apollo 11',
    'tags'     => ['apollo-11', 'moonwalk', 'armstrong', 'aldrin', 'eva', 'first', 'one-small-step', 'television', 'july-20-1969'],
    'excerpt'  => 'Neil Armstrong descended the ladder of the Eagle at 10:56 PM Eastern and stepped onto the Moon. His first words: "That\'s one small step for man, one giant leap for mankind." Buzz Aldrin followed twenty minutes later. I watched on television, the picture grainy and miraculous, and I kept thinking: there are people on the Moon right now. People. On the Moon.',
    'content'  => '<p>They set their alarm — metaphorically speaking — for sometime around 10 PM Eastern. Originally the plan had been for them to sleep first, to rest after the landing, and then conduct the moonwalk. But Armstrong and Aldrin — quite reasonably, I think — said they were too keyed up to sleep. Who could sleep? You just landed on the Moon. So Mission Control moved the EVA up.</p>

<p>It took a long time to get ready. Suit up, check everything, depressurize the cabin, open the hatch. The depressurization took a while. We sat in front of the television — my family — watching the coverage. Walter Cronkite in the studio. Scientists and commentators explaining what was happening, what to expect. The picture from the Moon\'s surface — black and white, from a camera mounted on the side of the descent stage — was already remarkable. The stark landscape. The shadow of the lunar module. The stillness of a world with no wind, no water, no weather.</p>

<p>At 10:39 PM, the hatch opened. You could see it on the television. The white figure of Neil Armstrong, in his spacesuit, beginning to back out through the hatch and descend the ladder. He moved carefully. There are handholds — specific places to grab — and the ladder itself. He descended, slowly. I counted the rungs, which was silly, but I counted them.</p>

<p>At the bottom: a small platform, and then the footpad of the landing leg, and then the surface. He paused at the bottom of the ladder. He reported what he saw. He tugged on a cord that deployed a camera so the world could watch what came next. And then:</p>

<p>"I\'m going to step off the LM now."</p>

<p>At 10:56:15 PM Eastern time, on July 20th, 1969, Neil Armstrong stepped off the landing pad and placed his left foot in the dust of the Sea of Tranquility. His boot pressed into the fine gray regolith of the Moon. The first human footprint on another world.</p>

<p>He said: "That\'s one small step for man, one giant leap for mankind."</p>

<p>There has been much debate since — even in the days since the landing — about whether he said "a man" or just "man." The audio has him saying "man," but Armstrong insists he said "a man," which makes the sentence grammatically parallel. "One small step for a man, one giant leap for mankind." I believe him. I think in the most important sentence anyone has said in human history, he said what he meant to say and the radio ate one word. It happens. His meaning is clear regardless.</p>

<p>He spent a few minutes alone on the surface before Aldrin joined him. He described what he saw: fine-grained, somewhat compacted soil. He could kick it loose. His boots sank in only slightly — the surface was solid, just as the Surveyor probes had promised. The footprint held its shape in the vacuum, perfectly crisp. There is no wind on the Moon to erode it. That footprint, or something very like it, is still there tonight and will be there for thousands of years.</p>

<p>Aldrin descended twenty minutes later. He looked around and said something I found very beautiful: "Beautiful view. Magnificent desolation." That\'s exactly right, I think. Magnificent desolation. Majestic in its blankness, spectacular in its emptiness. A world with everything stripped away except the rock and the light.</p>

<p>They planted the flag — an American flag, though Armstrong was careful in his remarks to say this was for all of humanity, and I believe the intent was indeed for all of humanity even if the flag on the pole is ours. They set up science experiments: a seismometer to measure moonquakes, a corner reflector so Earth-based lasers can measure the Moon\'s exact distance. They collected samples — forty-seven and a half pounds of rock, bagged and labeled. Every pound of that rock will be worth more to science than its weight in gold.</p>

<p>President Nixon called them from the Oval Office. He said something about this being the greatest week in the history of the world since the Creation. I found this a bit much. But I understand the impulse. How do you describe this? What language is adequate?</p>

<p>The moonwalk lasted two and a half hours. They came back inside. Sealed the hatch. Repressurized the cabin. They would rest — actually rest this time — before the ascent in the morning.</p>

<p>I sat in my living room after the television coverage wound down. The kids had gone to bed. Betty was dozing. I sat alone for a while.</p>

<p>Two people walked on the Moon tonight. They stood on its surface and looked at Earth hanging in the sky and came back inside and are sleeping now, 240,000 miles from where I\'m sitting. The footprints are there in the dust. The flag is there. The equipment is there. Something permanent has happened tonight, something that cannot be undone.</p>

<p>Tomorrow they come home. Tonight, for a few hours, two men are sleeping on the Moon.</p>

<p>I keep thinking that and I can\'t quite make it real. Two men are sleeping on the Moon tonight.</p>',
];

$posts[] = [
    'date'     => '1969-07-25',
    'title'    => 'I Looked Up Last Night',
    'category' => 'Apollo 11',
    'tags'     => ['apollo-11', 'moon', 'wonder', 'reflection', 'aftermath', 'personal', 'splashdown'],
    'excerpt'  => 'Apollo 11 splashed down safely on Thursday. Armstrong, Aldrin, and Collins are home. But last night I walked outside and looked up at the Moon, and it was different. It looked different. Not because anything had changed about the Moon. Because something had changed about me. About us. It\'s not just a light anymore.',
    'content'  => '<p>Apollo 11 splashed down in the Pacific on Thursday. Armstrong, Aldrin, and Collins were recovered by the USS Hornet and put into a Mobile Quarantine Facility — a converted Airstream trailer, essentially — because nobody is entirely certain there aren\'t lunar microbes that might infect Earth\'s ecosystem. The precaution is sensible and, watching the photographs of Nixon talking to the astronauts through a window in the trailer, faintly absurd. They went to the Moon and came home and now they\'re in a trailer being looked at through glass by the President. This is probably the right thing to do. It doesn\'t stop it from being a little funny.</p>

<p>But that\'s not what I want to write about tonight.</p>

<p>Last night — Friday, four days after the landing — I went outside after dinner. It was a warm evening. The Moon was up, nearly full, bright and high in the south. I stood in the yard and I looked at it.</p>

<p>It was different.</p>

<p>I don\'t mean the Moon itself was different. The Moon is the same as it has always been — the same craters, the same maria, the same ancient battered face that has been up there for four billion years. But looking at it was different. Something in my relationship to it has changed permanently, and I stood in my yard trying to understand what exactly had changed.</p>

<p>I think what changed is this: the Moon used to be a thing I could only look up at. It was remote and unreachable and beautiful and it was up there and I was down here and that was the condition of it — the Moon was up, humans were down, and never the twain shall meet. That was the eternal arrangement, going back to the first person who ever looked up and wondered what it was.</p>

<p>Now it\'s a place.</p>

<p>It\'s a place where people have been. Where footprints are. Where equipment sits in the regolith. Where a flag stands, planted by Buzz Aldrin\'s hands. The Sea of Tranquility is not an abstraction anymore — it\'s a location. A specific valley, with specific rocks, where a specific spacecraft landed and specific people walked and then came home. It\'s a place the way Normandy is a place, the way the summit of Everest is a place, the way the South Pole is a place. It is a location on a map where human beings have been.</p>

<p>My neighbor Harold came out of his house while I was standing there. He came over and stood next to me and we looked at the Moon together. Harold said, "Hard to believe they were up there." I said it was. We stood in silence for a bit longer. Then Harold said, "I was wrong." I looked at him. He said, "When Kennedy said we\'d go. I said it was a waste of money." He shook his head. "I was wrong."</p>

<p>Harold does not say he was wrong very often. I\'ll remember this moment.</p>

<p>I went back inside and sat with Betty. She asked what Harold had said and I told her. She smiled. Then she said something that I\'ve been thinking about since: she said that she hoped we weren\'t done now. That she hoped this wasn\'t the end of it. That she hoped the Moon landing wasn\'t a stunt we did and then walked away from.</p>

<p>I don\'t know. There are more Apollo missions planned — I\'ve read about Apollo 12, 13, 14, maybe more. So we\'ll go back. We\'re not done. But Betty\'s question goes deeper than the mission schedule. She was asking whether we\'re going to take this seriously, long term. Whether the Moon landing becomes the first step in something, or just the one step we keep talking about forever after.</p>

<p>I hope it\'s the first step. I think it has to be the first step. We have proven that human beings can go to another world and come home. That knowledge doesn\'t diminish. It\'s ours now. It belongs to the species.</p>

<p>The Moon is a place. We\'ve been there. We can go back. We will go back.</p>

<p>And last night, standing in my yard in July, looking up at something that will never be quite the same as it was before — I was glad I\'d been paying attention. Glad I\'d kept all those clippings. Glad I\'d watched every launch and stayed up for every splashdown and cried a little on a Friday night in January 1967 and hoped my way through the rebuilding and held my breath through the 1202 alarm.</p>

<p>We went to the Moon. We actually went. And now when I look up, I know it\'s a place.</p>

<p>I don\'t think I\'ll ever be able to look at it any other way.</p>',
];

// =============================================
// IMPORT FUNCTION
// =============================================

function get_or_create_tag( $name ) {
    $term = get_term_by( 'name', $name, 'post_tag' );
    if ( $term ) {
        return $term->term_id;
    }
    $result = wp_insert_term( $name, 'post_tag' );
    return is_wp_error( $result ) ? false : $result['term_id'];
}

function get_category_id( $name ) {
    $term = get_term_by( 'name', $name, 'category' );
    if ( $term ) {
        return $term->term_id;
    }
    // Try creating it
    $result = wp_insert_term( $name, 'category' );
    return is_wp_error( $result ) ? 1 : $result['term_id'];
}

$imported = 0;
$skipped  = 0;

foreach ( $posts as $post_data ) {
    // Check if already exists by title using direct DB query
    global $wpdb;
    $exists = $wpdb->get_var( $wpdb->prepare(
        "SELECT ID FROM {$wpdb->posts} WHERE post_title = %s AND post_type = 'post' AND post_status != 'trash' LIMIT 1",
        $post_data['title']
    ) );
    if ( $exists ) {
        echo "SKIP (exists): {$post_data['title']}\n";
        $skipped++;
        continue;
    }

    $cat_id = get_category_id( $post_data['category'] );
    $tag_ids = [];
    foreach ( $post_data['tags'] as $tag_name ) {
        $tid = get_or_create_tag( $tag_name );
        if ( $tid ) {
            $tag_ids[] = $tid;
        }
    }

    $post_id = wp_insert_post( [
        'post_title'   => $post_data['title'],
        'post_content' => $post_data['content'],
        'post_excerpt' => $post_data['excerpt'],
        'post_date'    => $post_data['date'] . ' 10:00:00',
        'post_status'  => 'publish',
        'post_type'    => 'post',
        'post_author'  => 1,
        'post_category' => [ $cat_id ],
        'tags_input'   => $post_data['tags'],
    ] );

    if ( is_wp_error( $post_id ) ) {
        echo "ERROR: {$post_data['title']} — " . $post_id->get_error_message() . "\n";
    } else {
        if ( ! empty( $tag_ids ) ) {
            wp_set_post_tags( $post_id, $post_data['tags'], false );
        }
        echo "CREATED [{$post_id}]: {$post_data['title']} ({$post_data['date']})\n";
        $imported++;
    }
}

echo "\n=== Import 1 complete: {$imported} created, {$skipped} skipped ===\n";
