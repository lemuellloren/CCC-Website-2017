# Website of Carlingford Chiropractic Centre - 2017

This is the project repository for the development and maintenance of the website of Carlingford Chiropractic Center - 2017 version.


## Project Organisation

Design phase files, sketches, client discussion notes and other resources not directly used in the frontend or backend development phases are placed in the `design_docs` folder. 

The project folder structure follow the structure of [Kirby][kirby]. Stylesheets, script files and static media resources are stored inside the `assets` folder. Site templates, view snippets, site content data, as well as all backend-related code is stored in the `site` folder. 


## Languages

- **Plain HTML5**, with no special requirements.
- **LESS**, concatenatenated into a single file, compiled into CSS and minified.
- **Javascript**, concatenated, transpiled with [Babel][babel] and minified.
- **PHP**, suitable for deployment in modern servers with PHP ≥ 7.0.


## Frameworks & Libraries

The frontend template was built using [UIKit](http://getuikit.com), version 2.72, the currently stable version. This framework was chosen over others, as it has all of the elements needed to realise the conceptual design. UIKit itself uses [jQuery](http://jquery.com) and [FontAwesome](http://fontawesome.io).

The backend was built with [Kirby][kirby], version 2.5.5. This php-based, flat-file CMS was chosed due to its high-configurability, high compatibility with almost all shared hosting services, extreme ease of maintenance, and a user interface that is fool-proof and highly enjoyable for the client to use.


## Development Tools

All development was done on MacOS X.

During the Design phase, site sketches and mockups were made using [Sketch][sketch]], version 43. Layout placement images used in mockups are from [Unsplash][unsplash].

During the Frontend Development phase, all coding was done in either [Sublime Text][sublime] version 3. Post-processing of all project files and automatic compilation of the `build` folder, was made with [CodeKit][codekit], version 3. CodeKit in turn uses several tools internally, such as [Bower][bower] to automatically download and maintain 3rd-party frameworks and libraries, and [Babel][babel] for transpiling Javascript, among many others. 

Some complex graphics and interactive animations were developed with [Hype3][hype].

During the Backend Development phase, we continued coding with Sublime Text, and used [MAMP Pro](https://www.mamp.info) for continual, local testing.

[sketch]: https://www.sketchapp.com "Sketch"
[hype]: http://tumult.com/hype/ "Tumult Hype"
[fontawesome]: http://fontawesome.io "FontAwesome"
[unsplash]: https://unsplash.com "Unsplash"
[sublime]: https://www.sublimetext.com "Sublime Text"
[msvscode]: https://www.visualstudio.com "Visual Studio"
[uikit]: https://getuikit.com "UIKit"
[codekit]: https://codekitapp.com "CodeKit"
[jquery]: http://jquery.com "jQuery"
[bower]: https://bower.io "Bower"
[babel]: https://babeljs.io "Babel"
[tower]: https://www.git-tower.com "Tower"
[markdown]: https://en.wikipedia.org/wiki/Markdown "Markdown"
[less]: http://lesscss.org "Less"
[kirby]: http://getkirby.com "Kirby CMS"