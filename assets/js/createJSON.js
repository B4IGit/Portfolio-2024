const skill = (skillsImg, skillsText) => ({ skillsImg, skillsText });

// Access to images
const skillsImages = {
    html5: 'assets/media/icons8-html.svg',
    css3: 'assets/media/icons8-css.svg',
    javaScript: 'assets/media/icons8-javascript.svg',
    bootStrap: 'assets/media/icons8-bootstrap.svg',
    sass: 'assets/media/icons8-sass-avatar.svg',
    php: 'assets/media/icons8-php.svg',
    mySQL: 'assets/media/icons8-mysql.svg',
    gitHub: 'assets/media/icons8-github.svg',
    wordPress: 'assets/media/icons8-wordpress.svg',
    drupal: 'assets/media/icons8-drupal.svg',
    react: 'assets/media/icons8-react-native.svg',
    photoShop: 'assets/media/icons8-photoshop.svg',
    illustrator: 'assets/media/icons8-illustrator.svg',
    inDesign: 'assets/media/icons8-adobe-indesign.svg',
    lightRoom: 'assets/media/icons8-adobe-lightroom.svg',
};




// Populate the array
const mySkills = [
    skill(skillsImages.html5, 'HTML5'),
    skill(skillsImages.css3, 'CSS3'),
    skill(skillsImages.javaScript, 'JavaScript'),
    skill(skillsImages.bootStrap, 'BootStrap'),
    skill(skillsImages.sass, 'Sass'),
    skill(skillsImages.php, 'PHP'),
    skill(skillsImages.mySQL, 'MySQL'),
    skill(skillsImages.gitHub, 'GitHub'),
    skill(skillsImages.wordPress, 'WordPress'),
    skill(skillsImages.drupal, 'Drupal'),
    skill(skillsImages.react, 'React JS'),
    skill(skillsImages.photoShop, 'Photoshop'),
    skill(skillsImages.illustrator, 'Illustrator'),
    skill(skillsImages.inDesign, 'InDesign'),
    skill(skillsImages.lightRoom, 'Lightroom'),
];

const semesterClasses = [
    {
        title: 'First Semester',
        classes: ['Digital Marketing', 'E-commerce', 'Intro HTML & CSS', 'Intro Photoshop for Web']
    },
    {
        title: 'Second Semester',
        classes: ['Advance CSS', 'Intro JavaScript', 'Intro Web Design', 'Intro WordPress']
    },
    {
        title: 'Third Semester',
        classes: ['Advance JavaScript', 'Content Marketing', 'Intro Desktop Publishing', 'Intro PHP', 'Website Application Components']
    },
    {
        title: 'Fourth Semester',
        classes: ['Emerging Technologies Seminar', 'Intro Drupal', 'Photoshop for Photography', 'Typography I', 'Website Application Seminar']
    }
];

const project = (projectImg, projectTitle, projectSkills, projectDesc) => ({ projectImg, projectTitle, projectSkills, projectDesc });

const projectImages = {
    chocolate: 'assets/media/DELICES_AU_CHOCOLATE.jpg',
    urban: 'assets/media/URBAN_GARDENS.jpg',
    sweets: 'assets/media/SWEETS_BUFFET.jpg',
    wow: 'assets/media/WOW_DESIGN.jpg',
    florals: 'assets/media/TRENDY_FLORALS.jpg',
    gpgp: 'assets/media/GPGP.jpg'
};

const myProjects = [
    project(projectImages.chocolate, 'Delices Au Chocolat', ['HTML', 'CSS'], 'One of the first websites I created during my first semester at DMACC'),
    project(projectImages.urban, 'Urban Gardens', ['HTML','CSS','ANIMATIONS'], 'Designed and implicated website for an imaginary landscaping company'),
    project(projectImages.sweets, 'Sweets Buffet', ['WordPress','HTML','CSS','BootStrap'],'This project was designed in WordPress using a variety of plugins and more'),
    project(projectImages.wow, 'WOW Design', ['WordPress','AdobeXD','HTML','CSS'],'This project was intended how we would design and format large amounts of information'),
    project(projectImages.florals, 'Trendy Florals', ['PHP','MySQL','Figma','HTML','CSS','UX Design'],'Final Project for PHP, mySQL database allows for input, update, delete, login, and logoff functionalities'),
    project(projectImages.gpgp, 'Great Plains Game Players', ['HTML','CSS','JavaScript','PHP','Figma','AI'],'Our class was given the opportunity to redesign and re-build their website for academic experience')
];

const jsonSkills = JSON.stringify(mySkills);
const jsonClasses = JSON.stringify(semesterClasses);
const jsonProjects = JSON.stringify(myProjects);

localStorage.setItem('skills', jsonSkills);
localStorage.setItem('semClasses', jsonClasses);
localStorage.setItem('projects', jsonProjects);
