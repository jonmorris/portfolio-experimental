<?php  $root = $_SERVER['DOCUMENT_ROOT']; ?>

<?php include_once($root . "/includes/head.php"); ?> 

<body id="top" class="project">

<?php include_once($root . "/includes/header.php"); ?> 

<main>
  <h1>AI Driven Foundation Finder</h1>
  <h2><a href="https://www.elfcosmetics.com/">E.L.F. Cosmetics</a> brought us in to design an AI driven app that helps customers find their perfect foundation color.</h2>
  <figure>
    <img src="/images/elf/elf-hero.png" alt="">
  </figure>
  <h3>Project Overview</h3>
  <p>E.L.F. was building a new tool to help their customers find the right makeup foundation color. We partnered with their 3rd party developer who was creating the AI driven backend that would process and output recommendations. They had a general idea of how they wanted the process to work, we helped them refine the user flow and produced the final designs. We created two versions of the experience, first we would make a stand-alone version to finish developing the technology and run user testing. Then we'd create the final version that we'd integrate into E.L.F.'s mobile app.</p>
  <h3>My Role</h3>
  <p>I was the lead UX Designer collaborating with our Design Director, Visual Designer, and the 3rd party developers. I was the sole individual responsible for User Experience and I personally created the deliverables that you will see in this case study, excluding visual design and development. I helped drive product strategy, features, and user experience.</p>
  <hr>

  <h3>Research & Discovery</h3>
  <p>We began by gaining an understand of what E.L.F.'s requirements were and what they'd defined so far. We also spent time with the developer creating the back end to understand how the technology worked and how it was progressing .</p>
  <p>Then I began researching competitive apps and reviewed best practices for camera-based experiences. There wasn't anything quite like this experience that E.L.F. was creating, most were either simple AR product try on experiences or were a simple product recommender wizard.</p>
  <hr>

  <h3>User Journey Mapping</h3>
  <p>I mapped out the user journey based on what E.L.F. had provided us, insights from my research, and best practices. This journey map helped us explore possibilities, confirm functionality possibilities with the developers, and it proved to be a usefull communication tool to align with the client's vision for the experience.</p>
  <figure class="no-limit">
    <figcaption>User Journey Map</figcaption>
    <img src="/images/elf/elf-user-flow.png" alt="">
  </figure>
  <p>I refined this over the course of a few working sessions with the client, and kept it updated throughout the design process as we would change screens, states, or the order of operations. This was helpful to keep a high level view of the flow and be able to take about it holistically.</p>
  <hr>

  <h3>User Onboarding Flow</h3>
  <p>One of the most critical challenges was ensuring users could follow the image capture instructions properly. The technology needed specific quality images in order to get accurate results. Low light, the wrong angle, or wearing glasses would negatively impact results.</p>
  <p>Initially my approach was to include multiple instruction screens, one overall onboarding screen that covers a general introduction to the experience and the other right before the image capture process that goes into details about it works.</p>
  <figure>
    <figcaption>Onboarding Flow</figcaption>
    <img src="/images/elf/elf-onboarding-wireframe.png" alt="">
  </figure>
  <p>Later after testing with actual users we found that generally users understood the app's concept and flow. But, we found friction during the capture process. So, we pivitoed slightly, simplifying the initial onboarding and focusing more on the instructions during the process of capturing images.</p>
  <hr>

  <h3>Image Capture Process</h3>
  <p>This portion of the experience is heavily driven by the underlying image analysis technology. It captures a series of photos while displaying different screen colors to give the analysis tool reference images for determining the user's skin tone. We needed to clearly explain precise lighting and phone positioning, similar to a selfie but slightly closer and at a specific angle to ensure users captured high-quality photos.</p> 
  <p>Specifically the parameters we needed to align were: distance, pitch, yaw, and roll. We explored a variety of options for how to help users get their phones in the right position for a positive result. Below are a few options including something similar to Apple's Face ID setup process and another turning it into an abstract dexterity game with users trying to align shapes. One method we tried had the three main parameters being adjusted all at once time while most of the methods tried to limit the number of things a user was attempting to align at once. </p>
  <figure>
    <figcaption>Image Capture Brainstorm</figcaption>
    <img src="/images/elf/elf-capture-brainstorm.png" alt="">
  </figure>
  <p>In the end we went with a stepped approach that focuses on one parameter at a time, then moves on to the next in a specific order. There are some that need to be honed in on first such as initial position and distance, then it will move on to the parameter that is most wrong until they're all within an acceptable range. Then it will slowly "lock in" confirming it's ready and providing a few final instructions before capture.</p>
  <hr>

  <h3>Recommendation Results Screen</h3>
  <p>The AI could output a user's estimated skin tone value which could be correlated to a specific shade of foundation. The program would also provide a percent confidence in the result, depending on capture conditions. It would generally work well, but in order to mitigate any results that were successful but less certain we decided to bracket the result with a lighter and darker shade. This had a secondary benefit of giving users three good choices to choose from narrowing down from all possible options.</p>
  <figure>
    <figcaption>Results Page</figcaption>
    <img src="/images/elf/elf-results-wireframe.png" alt="">
  </figure>
  <p>From here customers can move on to a purchase flow or save their results for later. Back on the app landing page we'd add a "saved results" section that let you save and manage multiple results. Saving results was important so users wouldn't need to repeat the process when returning to the app. And saving multiple results is helpful as skin tone can change over time depending on the season.</p>
  <hr>

  <h3>Prototypes & User Testing</h3>
  <p>I created various prototypes throughout the process to make sure we could get a feel for how the experience flowed and felt to use.</p>
  <!-- <figure>
  <figcaption>Low Fidelity Prototype</figcaption>
    <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="400" height="700" src="https://embed.figma.com/proto/zXG2L4y2kwNwLIH8rrSKVO/ELF?page-id=0%3A1&node-id=2-65&p=f&viewport=650%2C491%2C0.19&content-scaling=&starting-point-node-id=2%3A65&embed-host=share&hide-ui=1" allowfullscreen></iframe>
  </figure> -->
  <figure>
  <figcaption>Medium Fidelity Prototype</figcaption>
    <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="400" height="700" src="https://embed.figma.com/proto/zXG2L4y2kwNwLIH8rrSKVO/ELF?page-id=2%3A2&node-id=2-591&p=f&viewport=720%2C476%2C0.08&scaling=scale-down&content-scaling=fixed&starting-point-node-id=2%3A591&embed-host=share&hide-ui=1" allowfullscreen></iframe>
  </figure>
  <p>The tech team conducted in-person user testing, which gave us firsthand insight into how well people understood the app’s instructions, flow, and how well they understood the capture process. Based on their feedback, we refined directions, instructions and updated visuals streamlining the onboarding process.</p>
  <hr>

  <h3>Final Designs</h3>
  <!-- <figure>
    <figcaption>Final Design Prototype</figcaption>
    <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="400" height="700" src="https://embed.figma.com/proto/zXG2L4y2kwNwLIH8rrSKVO/ELF?page-id=4%3A2919&node-id=4-3401&p=f&viewport=737%2C459%2C0.09&scaling=scale-down&content-scaling=fixed&starting-point-node-id=4%3A3401&embed-host=share&hide-ui=1" allowfullscreen></iframe>
  </figure> -->
  <figure>
    <figcaption>Onboarding Flow</figcaption>
    <img src="/images/elf/elf-final-onboarding.png" alt="">
  </figure>
  <figure>
    <figcaption>Alignment Process</figcaption>
    <img src="/images/elf/elf-final-alignment.png" alt="">
  </figure>
  <figure>
    <figcaption>Results Screen</figcaption>
    <img src="/images/elf/elf-final-results.png" alt="">
  </figure>

  <?php include_once($root . "/includes/project-footer.php"); ?>
  