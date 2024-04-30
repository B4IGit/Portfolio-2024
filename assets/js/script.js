// Access stored Data from createJSON.js file - used to dynamically display content to the DOM using html <template></template>
    const retrieveSkills = localStorage.getItem('skills');
    const skillsObject = JSON.parse(retrieveSkills);

const retrieveClasses = localStorage.getItem('semClasses');
const classesObject = JSON.parse(retrieveClasses);

const retrieveProjects = localStorage.getItem('projects');
const projectsObject = JSON.parse(retrieveProjects);

function pageSetup() {

    // Dynamically loads each skills card with the corresponding image and title - data resides in createJSON.js file
    skillsObject.forEach(card => {
        // console.log('skillsImg', card.skillsImg);
        // console.log('skillsText', card.skillsText);

        let skillsTemplateRow = document.querySelector('#skills-template');
        let cloneSkillsCard = skillsTemplateRow.content.cloneNode(true);

        cloneSkillsCard.querySelector('img').src = card.skillsImg;
        cloneSkillsCard.querySelector('p').innerHTML = card.skillsText;

        document.querySelector('.skills-div').appendChild(cloneSkillsCard);
    })

    // Dynamically populates each semester with the corresponding classes - data resides in createJSON.js file
    classesObject.forEach(card => {
        // console.log('title', card.title);
        // console.log('classes', card.classes);

        let classesTemplateRow = document.querySelector('#classes-template');
        let cloneClassesCard = classesTemplateRow.content.cloneNode(true);

        cloneClassesCard.querySelector('h3').innerHTML = card.title;

        for(let i = 0; i < card.classes.length; i++) {
            let newLine = document.createElement("li");
            newLine.innerHTML = card.classes[i];
            cloneClassesCard.querySelector("p").append(newLine);
        }

        document.querySelector('.classes-div').appendChild(cloneClassesCard);
    });

    // Dynamically populate each project - data resides in createJSON.js file
    projectsObject.forEach(card => {
        let projectsTemplateRow = document.querySelector('#projects-template');
        let cloneProjectsCard = projectsTemplateRow.content.cloneNode(true);

        cloneProjectsCard.querySelector('img').src = card.projectImg;
        cloneProjectsCard.querySelector('h3').innerHTML = card.projectTitle;

        for(let i = 0; i < card.projectSkills.length; i++) {
            let newLine = document.createElement("li");
            newLine.innerHTML = card.projectSkills[i];
            cloneProjectsCard.querySelector("h4").append(newLine);
        }
        cloneProjectsCard.querySelector('p').innerHTML = card.projectDesc;

        document.querySelector('.projects-div').appendChild(cloneProjectsCard);
    });
    projectsObject.forEach(card => {
        console.log(card);
        //... rest of your code
    });

    //
    document.getElementById('viewAllBtn').addEventListener('click', function() {
        const skillsSection = document.querySelector('#skills')
        const skillsDiv = document.querySelector('.skills-div');
        const btn = document.getElementById('viewAllBtn');

        if (skillsDiv.style.height === 'auto') {
            // If the height is set, hide the elements
            skillsDiv.style.height = '350px';
            btn.innerHTML = 'View All';
            // Scroll to the top of the skillsDiv
            skillsSection.scrollIntoView({behavior: 'smooth', block: 'start'});
        } else {
            // If the height is not auto, show all elements
            skillsDiv.style.height = 'auto';
            btn.innerHTML = 'Hide All';
        }
    });
}




//  function to toggle Navbar for responsive design (open and closes)
function toggleMenu() {
    // alert('inside button');
    let dropdownMenu = document.getElementById('dropdown-menu');

    // Check if 'dropdownMenu' is currently visible
    if (dropdownMenu.style.display === "block") {
        dropdownMenu.style.display = "none";
    } else {
        dropdownMenu.style.display = "block";
    }
}

//  function to toggle between hamburger icon and close icon for responsive design
function changeIcon() {
    const originalIcon = 'assets/media/menu_lines_hamburger_icon.png';
    const newIconSrc = 'assets/media/close_round_icon.png';
    const targetElement = document.getElementById('toggle-icon');

    if (targetElement && targetElement.src.endsWith(originalIcon)) {
        // image is currently set to originalIcon, change it to newIconSrc
        targetElement.src = newIconSrc;
    } else if (targetElement) {
        // image is currently set to newIconSrc, change it to originalIcon
        targetElement.src = originalIcon;
    }
}