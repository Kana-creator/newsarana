<?php include 'inc/header.php'; ?>

<style>
    .aboutmain{
        background: #fff;
        padding: 2% 0;
        width: 100%;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
    }

    .aboutchild{
        width: 25.5%;
        padding: 20px 50px;
    }

    .aboutchild1{
        width: 60%;
    }

    .aboutchild>h3{
        text-align: center;
    }

    .aboutchild>p{
        text-align: justify;
    }

    .aboutchildimg{
        width: 50%;
        height: 200px;
        float: left;
        padding: 10px;
    }

    .corevalues{
        width: 25%;
        background: rgb(0, 0, 50,.9);
        border-radius: 20px;
        line-height: 30px;
        color: #fff;
    }

    .corevalues h3{
        text-align: center;
    }

    .nav>ul>li>a.about{
            /*background-color: rgb(0%,0%,100%,.6);*/
            border-bottom: 2px solid red;
        }

        .mission{
            margin-left: 100%;
            transition: all 1s;
        }

        .mission.full{
            margin-left: 3%;
        }

        @media(max-width: 991px){
            .nav>ul>li>a.about{
            border-bottom: 2px solid red;
            }

            .aboutchild, .corevalues{
                width: 100%;
                padding: 0;
                text-align: center;
            }

            .aboutchild>li, .aboutchild>p, .mission_p{
            font-family: "calibri";
            font-size: 100%;
            text-align: center;
            padding: 5% 0;
            width: 100%;
            margin: auto;
        }

        .mission.full{
            margin-left: 0;
        }
        
        }

</style>

<div class="mission">
        <img src="./imgs/picture3.jpg" alt="">
        <div class="sideleft">
            <h1>About Sarana</h1>
            <p class="mission_p">
            New Sarana nursery and primary school, Jinja is a very promising school 
            privately founded and owned. The school provides day care, nursery and primary 
            school education. It is located approximately 4km from Jinja town at Mafubira 
            off the jinja- Kamuli road. The school opened its first campus and registered 
            its pioneer pupils in January 2014.following the Ugandan education school 
            calendar for the new academic year. new sarana commenced operations for the 
            first term in February 2014.atotal of approximately 80 pupils have so far been 
            registered and are currently attending classes from day care, through nursery 
            to primary three. Enrolment of upper classes i.e. primary four to primary seven 
            will follow the subsequent progress of the initial lot of pupils year after year.
            Founded against a background of a desire and need for affordable, meaningful and 
            quality education for the vulnerable rural, semi- urban and urban population in 
            jinja and beyond who cannot afford high fees charged by the majority of private 
            schools as an alternative to public schools. New sarana continues to strive for 
            excellence and its directors, board of trustees, administration and staff are 
            committed to working together to identify specific courses of action to priotize 
            needs for new sarana nursery and primary school, jinja over the next few years.

            </p>
        </div>
    </div>

    <div class="aboutmain">
    <div class="aboutchild aboutchild1">
            <h3>Our Challenge</h3>
            <p>New Sarana Nursery and primary school enrolls children of age 4years to 
                7years in lower primary which is Baby Class- Primary Two and 7years-15years
                in upper primary upper primary which is Primary three to Primary Seven.</p>
        <p>Subjects taught to pupils in Lower primary are Mathematics, Reading, Writing, 
            Literacy, Drawing and shading while those taught in upper primary include; 
            Social Studies, Mathematics, English Language, Science.</p>
    <p>One of the major challenges that the school is facing is lack of reading and practice 
        books, for the pupils in the above mentioned subjects. The pupils are very poor at 
        reading as they do not have the books to practice and recite the English language, 
        view graphical illustrations, practice mathematical calculations and other fields as 
        mentioned above.</p>    
<p>The school administration has purchased a few English textbooks however these are not 
    enough as a class of thirty (30) pupils can share five (5) textbooks. Teachers are also 
    finding it hard to fully engage pupils during class hours as during certain classes they 
    have to show illustrations to pupils from the teachers’ notes book instead of the pupils 
    opening their textbooks and avoid time wastage during class sessions.</p>    
<p>This problem has continually affected the general performance of the pupils as observed 
    in the headmasters report presented on during the Annual Board meeting held in the 
    source of the Nile hotel.
The picture below shows the pupils of primary one striving to read from a few social studies 
atlas books during a class session.</p>
</p>

<div style="padding: 5% 0; text-align: justify;">
            <h3>what we hope to achieve</h3>
            <ul style="text-align: justify;">
                <li>To be the school of choice</li>
                <li>To be the pioneer/ pathfinder for our clients</li>
                <li>To be the first institution of call for all day care, nursery and primary school education needs.</li>
                <li>To provide affordable quality education</li>
                <li>To be professional and offer high quality affordable education.</li>
                <li>To raise academic performance to a national level</li>
                <li>To encourage and promote diversified modes of study and teaching.</li>
                <li>To develop a management structure that serves the school effectively.</li>
                <li>To attract, develop and maintain higher caliber, qualified staff.</li>
                <li>Strive to achieve best practices in financial management</li>
                <li>To provide and maintain state-of-the-art infrastructure that adequately supports the core functions of the school.</li>
                <li>To promote the image of the school to reflect the aspirations of stakeholders and universal values.</li>
            </ul>
            </div>


</div>

<div class="corevalues">
            <h3>Core Values</h3>
            <ol>
                <li>Efficiency – ensure that everything is done well and on time</li>
                <li>Transparency – everyone to serve in an open and accountable manner </li>
                <li>Punctuality- making sure that the available time is used, no wastage of time</li>
                <li>Respect- treating all members in the community with respect without partiality or favoritism</li>
                <li>Humility – handling all members of the schools and visitors with humility</li>
                <li>Integrity- ensure strong moral principles are upheld</li>
                <li>Professionalism-do everything in the right way, place and time</li>
                <li>Commitment- all stakeholders and team players to be committed in their duties and responsibilities</li>
                <li>Patience- always being patient in terms of difficult</li>
                <li>Dedication to excellence in program and people</li>
            </ol>
        </div>

        <?php for ($i=0; $i < 4; $i++): ?>
        <!--<div class="aboutchild">
            <img src="imgs/picture3.jpg" alt="" class="aboutchildimg">
            <h3>Core Values</h3>
            <p>Distinctio autem voluptatum eum culpa! Autem minus nobis facere fugit sapiente unde earum nulla itaque cupiditate, atque amet laudantium aspernatur reiciendis magni nemo doloremque ex cumque aut et! Omnis blanditiis, perspiciatis pariatur alias corporis quaerat quae reiciendis vitae optio cupiditate aperiam velit magnam eligendi autem eaque sunt saepe consequatur quia dolorum animi accusamus tempore?</p>
        </div>-->
        <?php endfor; ?>

    </div>




<?php include 'inc/footer.php'; ?>