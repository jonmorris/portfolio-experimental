---
title: "Enabling makeup matching with AI"
name: "E.L.F. Foundation Finder"
type: work
year: 2023
role: "Senior UX Designer"
skills: ["Product Strategy", "UX Design", "UI Design", "App Design", "User Research"]
summary: "I led UX design for E.L.F. Cosmetics’ AI-powered Foundation Finder, creating a guided experience that helps users identify their perfect foundation match. Through iterative design and testing, the solution improved confidence in shade selection and streamlined the path to purchase."
order: 0
---

## Overview

E.L.F. was building a new tool to help their customers find the right makeup foundation color. We partnered with their 3rd party developer who was creating the AI driven backend that would process and output recommendations. They had a general idea of how they wanted the process to work, we helped them refine the user flow and produced the final designs. We created two versions of the experience, first we would make a stand-alone version to finish developing the technology and run user testing. Then we'd create the final version that we'd integrate into E.L.F.'s mobile app.

I was the lead UX Designer collaborating with our Design Director, Visual Designer, and the 3rd party developers. I was the sole individual responsible for User Experience and I personally created the deliverables in this case study, excluding visual design and development. I helped drive product strategy, features, and user experience.

## Research

We began by gaining an understanding of what E.L.F.'s requirements were and what they'd defined so far. We also spent time with the developer creating the back end to understand how the technology worked and how it was progressing.

Then I began researching competitive apps and reviewed best practices for camera-based experiences. There wasn't anything quite like this experience that E.L.F. was creating, most were either simple AR product try on experiences or were a simple product recommender wizard.

## User journey mapping

I mapped out the user journey based on what E.L.F. had provided us, insights from my research, and best practices. This journey map helped us explore possibilities, confirm functionality possibilities with the developers, and it proved to be a useful communication tool to align with the client's vision for the experience.

I refined this over the course of a few working sessions with the client, and kept it updated throughout the design process as we would change screens, states, or the order of operations. This was helpful to keep a high level view of the flow and be able to talk about it holistically.

## Onboarding design

One of the most critical challenges was ensuring users could follow the image capture instructions properly. The technology needed specific quality images in order to get accurate results. Low light, the wrong angle, or wearing glasses would negatively impact results.

Initially my approach was to include multiple instruction screens, one overall onboarding screen that covers a general introduction to the experience and the other right before the image capture process that goes into details about how it works.

Later after testing with actual users we found that generally users understood the app's concept and flow. But, we found friction during the capture process. So, we pivoted slightly, simplifying the initial onboarding and focusing more on the instructions during the process of capturing images.

## Image capture

This portion of the experience is heavily driven by the underlying image analysis technology. It captures a series of photos while displaying different screen colors to give the analysis tool reference images for determining the user's skin tone. We needed to clearly explain precise lighting and phone positioning, similar to a selfie but slightly closer and at a specific angle to ensure users captured high-quality photos.

Specifically the parameters we needed to align were: distance, pitch, yaw, and roll. We explored a variety of options for how to help users get their phones in the right position for a positive result. Below are a few options including something similar to Apple's Face ID setup process and another turning it into an abstract dexterity game with users trying to align shapes. One method we tried had the three main parameters being adjusted all at once time while most of the methods tried to limit the number of things a user was attempting to align at once.

In the end we went with a stepped approach that focuses on one parameter at a time, then moves on to the next in a specific order. There are some that need to be honed in on first such as initial position and distance, then it will move on to the parameter that is most wrong until they're all within an acceptable range. Then it will slowly "lock in" confirming it's ready and providing a few final instructions before capture.

## Results screen

The AI could output a user's estimated skin tone value which could be correlated to a specific shade of foundation. The program would also provide a percent confidence in the result, depending on capture conditions. It would generally work well, but in order to mitigate any results that were successful but less certain we decided to bracket the result with a lighter and darker shade. This had a secondary benefit of giving users three good choices to choose from narrowing down from all possible options.

From here customers can move on to a purchase flow or save their results for later. Back on the app landing page we'd add a "saved results" section that let you save and manage multiple results. Saving results was important so users wouldn't need to repeat the process when returning to the app. And saving multiple results is helpful as skin tone can change over time depending on the season.

## Prototypes & user testing

I created various prototypes throughout the process to make sure we could get a feel for how the experience flowed and felt to use.

The tech team conducted in-person user testing, which gave us firsthand insight into how well people understood the app's instructions, flow, and how well they understood the capture process. Based on their feedback, we refined directions, instructions and updated visuals streamlining the onboarding process.
