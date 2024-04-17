const skill = (skillsImg, skillsText) => ({ skillsImg, skillsText });

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

const jsonSkills = JSON.stringify(mySkills);
const jsonClasses = JSON.stringify(semesterClasses);

localStorage.setItem('skills', jsonSkills);
localStorage.setItem('semClasses', jsonClasses);
