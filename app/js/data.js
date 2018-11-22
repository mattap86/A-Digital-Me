$.get('app/hbs/template.hbs', function(data) {
    var source = data
    var template = Handlebars.compile(source)
    var items =
        {
            "objectives": [
                {
                    "subject": "HTML & CSS:",
                    "objective1": "STYLING HTML WITH CSS",
                    "objective2": "UNDERSTANDING THE DOM & DOCUMENT FLOW",
                    "objective3": "STATIC & DYNAMIC WEBSITES",
                    "objective4": "COMMON CSS BROWSER BUGS",
                    "objective5": "",
                    "objective6": "",
                    "objective7": "",
                    "objective8": ""
                },
                {
                    "subject": "SCRUM & SOFTWARE DEVELOPER ESSENTIALS:",
                    "objective1": "ATTAINING CERTIFIED SCRUM MASTER STATUS",
                    "objective2": "UNDERSTANDING THE ROLE OF POFO",
                    "objective3": "INTRODUCTION TO & UNDERSTANDING GIT",
                    "objective4": "INTRODUCTION TO WEB SECURITY",
                    "objective5": "USING THE COMMAND LINE",
                    "objective6": "",
                    "objective7": "",
                    "objective8": ""
                },
                {
                    "subject": "PHP BASICS:",
                    "objective1": "UNDERSTANDING SYNTAX & STRUCTURAL ELEMENTS",
                    "objective2": "CORRECT APPLICATION OF CONTROL-FLOW STRUCTURES",
                    "objective3": "DATA TYPES, TYPE-JUGGLING & OPERATOR PRECEDENCE",
                    "objective4": "DRY PRINCIPLE",
                    "objective5": "BUILT-IN FILE SYSTEM & ARRAY FUNCTIONS",
                    "objective6": "HTTP, COOKIES & SESSIONS",
                    "objective7": "",
                    "objective8": ""
                },
                {
                    "subject": "DATABASES & SQL:",
                    "objective1": "UNDERSTANDING DATABASES",
                    "objective2": "UNDERSTANDING SQL",
                    "objective3": "CREATING & OPTIMISING DATABASES",
                    "objective4": "EFFICIENT QUERYING OF A DATABASE",
                    "objective5": "USING DATABASES FROM PHP",
                    "objective6": "DATABASE ENGINES",
                    "objective7": "",
                    "objective8": ""
                },
                {
                    "subject": "JAVASCRIPT BASICS:",
                    "objective1": "JS ORIGINS & HOW IT WORKS",
                    "objective2": "JS STRUCTURE & DATA TYPES",
                    "objective3": "BUILDING & MANIPULATING DATA WITH JS",
                    "objective4": "THE DOM & JS",
                    "objective5": "JS SCOPE",
                    "objective6": "AJAX",
                    "objective7": "JS CONSOLE",
                    "objective8": "JQUERY"
                },
                {
                    "subject": "ADVANCED FRONT END:",
                    "objective1": "CSS PREPROCESSORS",
                    "objective2": "HOW JS & CSS WORK TOGETHER EFFICIENTLY",
                    "objective3": "RWD & CSS FRAMEWORKS",
                    "objective4": "PWAs",
                    "objective5": "",
                    "objective6": "",
                    "objective7": "",
                    "objective8": ""
                },
                {
                    "subject": "OBJECT-ORIENTATED PROGRAMMING WITH PHP:",
                    "objective1": "DESIGN PATTERNS & ANTI-PATTERNS",
                    "objective2": "UNDERSTANDING SOLID & DRY",
                    "objective3": "UTILITY OF REGULAR EXPRESSIONS",
                    "objective4": "BUILDING SIMPLE OO CLASS HIERARCHY",
                    "objective5": "UNIT TESTING OO FILES",
                    "objective6": "EXCEPTIONS & ERROR HANDLING",
                    "objective7": "DOCUMENTING SOURCE CODE WITH PHPDOC ANNOTATIONS",
                    "objective8": ""
                },
                {
                    "subject": "MVC & PHP FRAMEWORKS:",
                    "objective1": "UNDERSTANDING & USE OF MVC STRUCTURE",
                    "objective2": "UNDERSTANDING & USE OF PHP FRAMEWORKS",
                    "objective3": "RECOGNITION & UNDERSTANDING OF OTHER DESIGN PATTERNS & ANTI-PATTERNS",
                    "objective4": "",
                    "objective5": "",
                    "objective6": "",
                    "objective7": "",
                    "objective8": ""
                },
                {
                    "subject": "MVC & PHP FRAMEWORKS:",
                    "objective1": "REST APIs & THEIR USE",
                    "objective2": "NODE.JS & EXPRESS",
                    "objective3": "CONNECTING TO A DB FROM A NODE APP",
                    "objective4": "JS FRAMEWORKS",
                    "objective5": "JS FRAMEWORKS WITH NODE",
                    "objective6": "",
                    "objective7": "",
                    "objective8": ""
                },
            ]
        }
    var html = template(items)
    $('.topics').append(html)
})
