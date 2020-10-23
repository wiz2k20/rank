<?php



/* INPUT NICK */

.c_r_nick_box {
    position: relative;
    background: none;  
    --COR-BORDA: #5D6D7E;  
}
.c_r_nick_box input {
    padding-left: 63px;
    font-size: 16px;
    width: 260px;   
    height: 35px;
    /* padding: 50px 0 0 0; */
    /* padding-top: 2px;  */
    color: #FFFF00;
    font-weight: bold;
    background-color: black;
    border: 1px solid var(--COR-BORDA);   
    border-radius: 5px 5px 5px 5px;
    /* left-top, right-top, right-bot, left-bot */
}

.c_r_nick_box input:focus {
    outline: 0;
}

.c_r_nick_box span {	
    position: absolute;
    left: 0;
    color: white;
    /* text-align: center; */
    font-size: 16px;
    padding-left: 5px;
    padding-top: 7px; /* DONT CHANGE */ 
    background-color: #1B2631;
    border: 1px solid var(--COR-BORDA); /*  #FFFF00 */
    border-radius: 5px 0px 0px 5px;
    /* left-top, right-top, right-bot, left-bot */
    width: 50px;
    height: 26px;
}





?>