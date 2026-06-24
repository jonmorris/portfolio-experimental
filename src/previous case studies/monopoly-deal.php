<?php  $root = $_SERVER['DOCUMENT_ROOT']; ?>

<?php include_once($root . "/includes/head.php"); ?> 

<body id="top" class="project">

<?php include_once($root . "/includes/header.php"); ?> 

<main>
  <h1>Applying UX Principles to Paper Card Games</h1>
  <h2>This is my personal redesign of <a target="_blank" href="https://boardgamegeek.com/boardgame/40398/monopoly-deal-card-game">Monopoly Deal</a>, a notibly shorter yet somehow more brutal card game variation of Monopoly.</h2>
  <figure>
    <img src="/images/monopoly/placeholder.png" alt="">
  </figure>
  <h3>Project Overview</h3>
  <p>After a game or two I noticed a few things with the design of the game that could be improved. So as a design exercise I started to explore how I might redesign the game. I redesigned Monopoly Deal as a self-initiated project focused on improving the game’s usability, aesthetics, and clarity.</p>
  <h3>My Role</h3>
  <p>The game design is entirely Katharine Chapman's, save for a couple of my own card designs I played around with. I was solely responsive for the new design and work within this project. I did test this with friends, and use their feedback as well. This redesign is not meant to criticize the original design in any way. Just meant to explore ways of making it even better than it already is.</p>
  <hr>

  <h3>Game Overview</h3>
  <p>Monopoly Deal is a card game based on Monopoly, players win by collecting three complete property sets. Each turn a player draws two cards from the deck, and then can complete three actions. Actions include playing a property to your tableau, adding money to your bank, or playing action cards with various effects. Players can complete their property sets by playing their own properties, stealing from another player, or might obtain properties when collecting rent. The game ends once one player has completed their third set of properties.</p>
  <p>All of the Monopoly properties you know from the original game are present, and some of the other game effects are captured in the action cards such as passing go, collectig rent, and adding houses & hotels to your property sets. Overall it is a much faster and condensed version of the original boardgame. Winning pretty much requires protecting your board while stealing your way to enough complete property sets.</p>
  <figure>
    <figcaption></figcaption>
    <img src="/images/monopoly/placeholder.png" alt="">
  </figure>
  <p>It's a fairly simple game, it can also be pretty short, and it is usually pretty cuthroat. These are three great features, you can get completely wrecked by repeatedly getting your board stolen, but the game is short enough that it doesn't sting that bad.</p>
  <hr>

  <h3>Goals & Objectives</h3>
  <h4>The goals of this exercise</h4>
  <ol class="numbered">
    <li>Improve the usability and user experience</li>
    <li>Improve the visual design</li>
    <li>Improve the game design if needed</li>
    <li>Improve the rulebook</li>
  </ol>
  <h4>Considerations</h4>
  <ol class="numbered">
    <li>Make it as accessible as possible</li>
    <li>Make it playable in a dimly lit, noisy bar</li>
    <li></li>
  </ol>
  <figure>
    <figcaption></figcaption>
    <img src="/images/monopoly/placeholder.png" alt="">
  </figure>
  <hr>

  <h3>Heuristic Evaluation & Research</h3>
  <p>I began by starting to document potential issues and opportunities as we played more games. Then I ran a heurstic evaluation of the version of the game we had.</p>
  <p>Heuristic & Playtest Findings</p>
  <ol class="numbered">
    <li></li>
  </ol>
  <figure>
    <figcaption></figcaption>
    <img src="/images/monopoly/placeholder.png" alt="">
  </figure>
  <hr>

  <h3>Exploring Design Options</h3>
  <p>I knew that I wanted to align the design with older versions of Monopoly. There's something sharp and crips about them, and the various aesthetics that exist for this game are close but not quite the same. I found a few reference photos and selected one to work off of for design direction and colors.</p>
  <p>I'd say the general layout of each of the existing cards was good. The biggest improvements I thought I could make were stylistic and for better accessibility.</p>
  <figure class="limit">
    <figcaption>Property Card Reference</figcaption>
    <img src="/images/monopoly/old-property-cards.png" alt="">
  </figure>
  <figure>
    <figcaption>Property Cards</figcaption>
    <img src="/images/monopoly/placeholder.png" alt="">
  </figure>
  <p>The universal wildcard I ended up doing quite a bit of exploration on. This was a bit tricky as it needs to match the rest of the property cards core system, but also can be used in any property set. The original version used the property colors as a rainbow in the name box. But </p>
  <figure>
    <figcaption>Wildcard</figcaption>
    <img src="/images/monopoly/placeholder.png" alt="">
  </figure>
  <figure>
    <figcaption>Action Cards</figcaption>
    <img src="/images/monopoly/placeholder.png" alt="">
  </figure>
  <p>I remade the money to somewhat mimic monopoly money but wasn't copying any reference directly. I think this is one of the weakest parts of v1 aesthetically - will take another look at these for v2.</p>
  <figure>
    <figcaption>Money & Reference Cards</figcaption>
    <img src="/images/monopoly/placeholder.png" alt="">
  </figure>
  <p>This was another area that required some exploration. I wanted something that was iconic and fun.</p>
  <figure>
    <figcaption>Card Backs</figcaption>
    <img src="/images/monopoly/placeholder.png" alt="">
  </figure>
  <hr>

  <h3>Establishing a Design System</h3>
  <p>I then took the best design option and built a design system that would allow for easier modifications after I built all the cards.</p>
  
  <figure>
    <figcaption>Design Style Guide</figcaption>
    <img src="/images/monopoly/placeholder.png" alt="">
  </figure>
  <figure>
    <figcaption>Design System Templates</figcaption>
    <img src="/images/monopoly/placeholder.png" alt="">
  </figure>
  <hr>

  <h3>Prototyping & Playtesting</h3>
  <p>I ordered a printed copy on real cards to try and test. Overall the response from our play group was that the new version was an improvement. There were still many things that came up while testing that I noted down to fix in V2.</p>
  <ol class="numbered">
    <li>There was some confusion between the colors. Specifically Purple and Dark Blue as well as the Utility Green and the Dark Property Green.</li>
    <li>We noticed that when the wild cards are stacked that you can't always tell what color is on the other end.</li>
    <li>The brightly colored actions cards with color printed to the edge can be seen when the cards are face down.</li>
    <li>You can't see the House and Hotel action cards clearly when stacked on a property set.</li>
    <li>The way the Double the Rent card works was confusing and unclear.</li>
    <li>The money value in the corner wasn't large enough to be easily read from across a table.</li>
    <li>The card backs had the potential to give away the fact that you had a wildcard in hand as they weren't bidirectional.</li>
  </ol>
  <figure>
    <figcaption>Playtest Print</figcaption>
    <img src="/images/monopoly/placeholder.png" alt="">
  </figure>
  <hr>

  <h3>Iteration</h3>
  <p>I took the feedback and notes from playtesting and made some modifications to the first version.</p>
  <h4>Wild Properties</h4>
  <p>For these the main issue was not being able to see what both colors were on each double ended card if it was tucked under another card. I tried a variation where you wouldn't need to flip the card, but that lead to an issue of readabiilty of the text in the color. I settled on including a small indicator like a dog ear in the color box noting the color on the opposite side.</p>
  <figure class="text-limit">
    <figcaption></figcaption>
    <img src="/images/monopoly/monopoly-wild-iteration.png" alt="">
  </figure>
  <p>I think this is a good R2 solution, I want to further test if this is effective and if the color combinations are clearly understandable from across the table.</p>
  <h4>House and Hotel Action Cards</h4>
  <p></p>
  <figure class="text-limit">
    <figcaption></figcaption>
    <img src="/images/monopoly/monopoly-wild-iteration.png" alt="">
  </figure>
  <h4>Card Backs</h4>
  <p>This was problematic because some cards are double sided, so an upside down card in your hand would give away information that you might have a wildcard.</p>
  <figure class="text-limit">
    <figcaption></figcaption>
    <img src="/images/monopoly/monopoly-wild-iteration.png" alt="">
  </figure>
  <h4>Other Small Changes</h4>
  <p>I also addressed the money indicator size, the action card borders, and some of the text on actions cards to make them more clear, among a few other smaller changes.</p>
  <hr>

  <h3>Rulebook Augmentation</h3>
  <p></p>
  <figure class="no-limit">
    <figcaption></figcaption>
    <img src="/images/monopoly/placeholder.png" alt="">
  </figure>
  <hr>

  <h3>Final Designs (For Now)</h3>
  <p></p>
  <figure class="no-limit">
    <figcaption></figcaption>
    <img src="/images/monopoly/placeholder.png" alt="">
  </figure>
  <hr>

  <h3>Further Game Design Analysis</h3>
  <p>Now, let's look at the game design itself. Some complaints that I have or that I've heard of the design are:</p>
  <ol class="numbered">
    <li>The game can feel very random at times</li>
    <li>In the first turn you're not incentivised to play anything to the board</li>
    <li>Games that get stuck and just can't end</li>
    <li>The rules could be more clear and specific in a few areas</li>
    <li>If you don't have much on the board you're pretty much out of the game</li>
  </ol>
  <h4>Addressing Randomness</h4>
  <p>The complaint here is that the game's randomness can feel bad and deterministic. You can only play the cards you draw and you don't have a lot of autonomy. It's much more tactical than strategic. Randomness doesn't have to feel bad and deterministic, it doesn't always feel that way in various other games. I think this ties very heavily to the "No Way to Catch Up" section, in that that is one possible outcome of the randomness. There might be a game where you just don't have any answers to what the other players are doing, you're just a pinyata for them to harvest a win from.</p>
  <h4>First Turn Incentives</h4>
  <p>You have a hand limit of 7 (the number of cards you can hold in your hand at the end of your turn or at any time?). You start the game with 5 cards and on the first turn you draw 2 cards. So the first turn you're not required to do anything, you can just hold all your cards. It has seemed in our experience that if you play anything on your first turn, the odds of it just getting stolen from you is very high.</p>
  <p>There is a card called "Debt Collector" which steals $5 from any single player, there is also a card called "It's Your Birthday" which steals $2 from each player. Let's say in a four player game the first 3 players each play 3 cards on their turns, either properties or money totalling an average of $5 per player. The fourth player has both of the cards in hand I mentioned, or even a 3rd theft card. Now on their first turn they play all 3. They now have at least $11 if not possibly $16 or $17 worth of assets, and the other players are likely completely broke or at best they've manage to hold onto one property that has no protection.</p>
  <h4>Games That Won't End</h4>
  <p>Occasionally games can stagnate when all of the theft cards have been played and maybe countered and the game after many rounds is entirely reliant on drawing and playing properties. We're now just waiting to be able to reshuffle the discard pile to reset the possibility to draw the theft cards that will enable bigger moves to end the game.</p>
  <h4>Rules Clarity</h4>
  <p>There are some rules and card interactions that could use an official explanation in the rulebook. The rulebook in general is very small, which in some ways is a good thing. However, a little more explanation could be useful.</p>
  <p>One example is clarity on how the card "Just Say No" works. Whether it can be played at any time to cancel any card play, or if it can only be used on things that target the player playing it. If it cancels the card completely or only the effect on the player who played it. For example if a player played a "It's My Birthday", collecting $2 from every other player and another player plays "Just Say No" is the birthday card canceled for the whole table or just that player?</p>
  <h4>No Way To Catch Up</h4>
  <p>If you've had a lot of your board state stolen, you haven't happened to draw theft cards or a "no thanks" card, you are just out of the game. You end up with no way to gain enough resources to regain a board state and then protect it from further theft. Because you can't protect your board you can't really accumulate propreties any more to have a chance at winning. If you don't draw theft cards you can't really undo the theft.</p>
  <figure>
    <figcaption></figcaption>
    <img src="/images/monopoly/placeholder.png" alt="">
  </figure>
  <hr>
  <h3>Thank You</h3>
  <p>To anyone involved in the design or production of this game - thank you. I'll state again that this is not intended to be a critcism in a negative finger pointing way. It is intended as a deep dive into something I enjoy, have played a lot of, and wanted to see if I could improve as an exercise.</p>
  <p>If you'd like to chat with about any of my work here please contact me, I'd love to do something more official with this.</p>

<?php include_once($root . "/includes/project-footer.php"); ?>