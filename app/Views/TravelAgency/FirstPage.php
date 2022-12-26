<!DOCTYPE html>
<html lang="en">
<head>
    <title>Travel Agency</title>
</head>

<style>
    *{
        margin:0;
        padding:0;
        scroll-behavior:smooth;
        
    }
    body{
        background:#6f5a91;
    }
    header{
        width:100%;
        height:10vh;
        background:black;
        position: sticky;
        top:0;
        z-index: 10000;
    }
    nav{
        display:flex;
        justify-content:space-between;
        align-items:center;
        padding:25px 10% 0% 10%;
    }
    nav h2{
        font-size:2em;
        color:white;
    }
    ul li{
        margin:0 10px 0 10px;
        list-style: none;
        display: inline-block;
        padding: 0 25px 0 25px;
    }
    ul li:hover{
        background:#6f5a91;
    }
    ul li a{
        text-decoration:white;
        color:white;
        font-size:1.2em;
    }
    img{
        width:100%;
        height:100vh;
        background-image:linear-gradient(rgba(0,0,0,0.8).rgba(0,0,0,0.8));
    }
    .imgbx{
        width:100%;
        height:100vh;
        background-image:linear-gradient(rgba(0,0,0,1),rgba(0,0,0,0.1));
        z-index: 4;
        position: absolute;
        top:90px;
    }span{
        color:#6f5a91;
    }
    #about{
        width:100%;
        height:100vh;
    }
    .bx{
        width:100%;
        height:100vh;
    }
    .cbox{
        position: absolute;
        top:110.5vh;
        width:100%;
        height:100vh;
        background:linear-gradient(rgba(255,255,255, 0),rgba(0,0,0,1));
        z-index: -1;
    }
    .bx h2{
        padding-top:100px;
        padding-bottom:100px;
        text-align:center;
        font-size:2em;
        color:white;
    }
    .bx p{
        padding: 10px 150px;
        text-align:justify;
        font-size:1em;
        color:white;
    }
    button{
        padding:15px 20px;
        background:#6f5a91;
        border-radius:30px;
        Color:white;
        cursor: pointer;
    }
    .tbx{
        position: absolute;
        top:40%;
        left:50%;
        transform:translate(-50%,-50%);
        text-align:center;
        font-size:3em;
        color:white;
        z-index: 6;
    }
    #travel{
        width:100%;
        height:100vh;
        background:black;
    }
    #contact{
        width:100%;
        height:100vh;
    }
    .cboxx{
        position: absolute;
        top:310vh;
        width:100%;
        height:100vh;
        background:linear-gradient(rgba(0,0,0,1),rgba(255,255,255, 0));
        z-index: -1;
    }
    .el{
        text-align:center;
    }
    .el h2{
        padding-top:100px;
        color:white;
    }
    .card{
        width:300px;
        height:450px;
        background:linear-gradient(#919191,white,#919191,white,#919191);
        margin:50px;
        padding:10px
    }
    .cardpic{
        width:100%;
        height:78%;
        background:white;
    }
    .cardpic img{
        width:100%;
        height:100%;
    }
    .cardcn{
        width:100%;
        height:22%;
        background:linear-gradient(white,#919191,white);
    }
    .allcards{
        display:flex;
        flex-direction:row;
        align-items:center;
        justify-content:center;

    }
    footer{
        width:100%;
        height:10vh;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }
    footer h2{
        padding-left:100px;
        color:white;
    }
    footer ul{
        padding-right:100px;
        color:white;
        cursor: pointer;
    }
    .cnnbx{
        text-align:center;
        color:white;
    }
    table{
        position: absolute;
        top:360vh;
        left:50%;
        transform:translate(-50%,-50%);
        text-align:center;
    }
    table td{
        width:500px;
    }
    .cnnbx h2{
        padding-top:150px;
        color:white;
    }
    input{
        margin:20px;
        height:30px;
        width:300px;
        font-size:1.2em;
        padding-left:15px;
        background:rgba(0,0,0,0.6);
        color:white;
    }
    textarea{
        margin:20px;
        height:80px;
        width:300px;
        font-size:1.2em;
        padding:15px;
        background:rgba(0,0,0,0.6);
        color:white;
    }
    #send{
        width:150px;
    }
    #t1{
        font-size:2em
    }
    #t2{
        cursor: pointer;
        color:yellow;
        font-size:1.5em
    }
    #imgptn{
        opacity: 0.2;
        position: absolute;
        top:110vh;
        width:100%;
        height:100vh;
    }
    #rdptn{
        opacity: 0.2;
        position: absolute;
        top:310vh;
        width:100%;
        height:100vh;
    }
    ::-webkit-scrollbar{
        width:5px;
    }
    ::-webkit-scrollbar-thumb{
        background:linear-gradient(black,transparent,black);
        border-radius:5px;
    }
    
    
</style>

<body>
    
    <Header>
        
        <nav>
        <h2>Travel<Span> Agency</Span></h2>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#travel">Travel</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <button>Login/SingUp</button>
        </nav>
    </Header>
    <Section id="home">
        <img src="https://i.postimg.cc/jSm4mhY9/ian-simmonds-a-Gp-FT7-AXhag-unsplash.jpg" alt="">
        <div class="imgbx"></div>
        <div class="tbx">
            <h2>Best Travel Agency In</br> Sri Lanka</h2>
        </div>
    </Section>
    <Section id="about">
        <div class="bx">
            <img id="imgptn"src="https://i.postimg.cc/L43R4BR9/webptern.png" alt="">
            <h2>About</h2>
            <p>Since 2010 Sri lanka's best Travel Agency. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto minima accusantium magni debitis earum eligendi nemo id tempora nam soluta. Id totam ex atque minus voluptatem reprehenderit aut quia quae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam excepturi iusto eos recusandae voluptatum eligendi asperiores, error obcaecati tempore quasi aperiam, dignissimos cumque quisquam rem nisi nemo labore magni? Facilis! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia pariatur distinctio doloribus quam temporibus fuga fugit aperiam quod cupiditate, repellendus perferendis est ab a at quasi corporis soluta. Aliquam, voluptate.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto minima accusantium magni debitis earum eligendi nemo id tempora nam soluta. Id totam ex atque minus voluptatem reprehenderit aut quia quae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam excepturi iusto eos recusandae voluptatum eligendi asperiores, error obcaecati tempore quasi aperiam, dignissimos cumque quisquam rem nisi nemo labore magni? Facilis! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia pariatur distinctio doloribus quam temporibus fuga fugit aperiam quod cupiditate, repellendus perferendis est ab a at quasi corporis soluta. Aliquam, voluptate.</p>
        
        </div>
        <div class="cbox"></div>
        
        
    </Section>
    <section id="travel">
        <div class="el">
            <h2>Tourist Places in Sri Lanka</h2>
            <div class="allcards">
                <div div class="card">
                    <div class="cardpic"><img src="https://i.postimg.cc/d0JrzNS5/heshan-weeramanthri-yt-Nk5s-4-Wys-unsplash.jpg" alt=""></div>
                    <div class="cardcn">
                        <button>View Place</button>
                        <h3>Nuwara Eliya</h3>
                    </div>
                </div>
                <div div class="card">
                    <div class="cardpic">
                        <img src="https://i.postimg.cc/YCWdpPRk/jannes-jacobs-8x3mdr-B3x5-A-unsplash.jpg" alt="">
                    </div>
                    <div class="cardcn">
                        <button>View Place</button>
                        <h3>Sigiriya Rock</h3>
                    </div>
                </div>
                <div div class="card">
                    <div class="cardpic"><img src="https://i.postimg.cc/m20S6wsn/shainee-fernando-dr-Gdvwyhmoc-unsplash.jpg" alt=""></div>
                    <div class="cardcn">
                        <button>View Place</button>
                        <h3>Galle</h3>
                    </div>
                </div>
            </div>
            
            <Button>View More</Button>
        </div>
    </section>
    <section id="contact">
    
        <div class="cboxx"></div>
        <img id="rdptn" src="https://i.postimg.cc/02czjKDS/rdptn.png" alt="">
        <div class="cnnbx">
            <h2>CONTACT</h2>
            <table>
                <tr>
                    <td id="t1">GET IN TOUCH WITH US</td>
                    <td><input type="text" placeholder="Name"></td>
                </tr>
                <tr>
                    <td>123 COLOMBO, SRI LANKA</br>0112345678/0119874562</td>
                    <td><input type="email" placeholder="Email"></td>
                </tr>
                <tr>
                    <td id="t2">FIND US</td>
                    <td><textarea placeholder="Message"></textarea></td>
                </tr>
                <tr>
                    <td>CONTACT@TRAVELANGENCY.COM</td>
                    <td><button id="send">SEND</button></td>
                </tr>
            </table>
        </div>
    </section>
    <footer>
        <h2>Follow Us</h2>
        <ul>
            <li>Youtube</li>
            <li>Facebook</li>
        </ul>
    </footer>
    
</body>
</html>