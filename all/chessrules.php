<?
    top('RULES', $page);
    echo $page;
?>
<style>
#div1, #div2, #div3, #div4, #div5, #div6, #div7, #div8, #div11{
  display: none;
}
p{
    margin :0;
}
 

.im, .peshka, .phod{
    text-align:center;
   
}



td img{
    width:250px;
    height:250px; 
}

.im img, .phod img{
    width:250px;
    height:250px;
}
ol, ul{
    padding-left:15px;
}


</style>
<script>
function viewDiv1(){
  /*document.getElementById("div1").style.display = "block";*/
  display = document.getElementById("div1").style.display;

    if(display=='none'){
       document.getElementById("div1").style.display='block';
    }else{
       document.getElementById("div1").style.display='none';
    }

   

};

function viewDiv11(){
  /*document.getElementById("div1").style.display = "block";*/
  display = document.getElementById("div11").style.display;

    if(display=='none'){
       document.getElementById("div11").style.display='block';
    }else{
       document.getElementById("div11").style.display='none';
    }

   

};

function viewDiv2(){
  

    display = document.getElementById("div2").style.display;

    if(display=='none'){
       document.getElementById("div2").style.display='block';
    }else{
       document.getElementById("div2").style.display='none';
    }

};

function viewDiv3(){
  

  display = document.getElementById("div3").style.display;

  if(display=='none'){
     document.getElementById("div3").style.display='block';
  }else{
     document.getElementById("div3").style.display='none';
  }

};
function viewDiv4(){
  

  display = document.getElementById("div4").style.display;

  if(display=='none'){
     document.getElementById("div4").style.display='block';
  }else{
     document.getElementById("div4").style.display='none';
  }

};
function viewDiv5(){
  

  display = document.getElementById("div5").style.display;

  if(display=='none'){
     document.getElementById("div5").style.display='block';
  }else{
     document.getElementById("div5").style.display='none';
  }

};
function viewDiv6(){
  

  display = document.getElementById("div6").style.display;

  if(display=='none'){
     document.getElementById("div6").style.display='block';
  }else{
     document.getElementById("div6").style.display='none';
  }

};
function viewDiv7(){
  

  display = document.getElementById("div7").style.display;

  if(display=='none'){
     document.getElementById("div7").style.display='block';
  }else{
     document.getElementById("div7").style.display='none';
  }

};

function viewDiv8(){
  

  display = document.getElementById("div8").style.display;

  if(display=='none'){
     document.getElementById("div8").style.display='block';
  }else{
     document.getElementById("div8").style.display='none';
  }

};
</script>
<h1>Шаховий підручник для початківців</h1>
<p>Рад, что вы решили начать изучение шахмат, уверен, что это будет не только полезно для вас, но и очень увлекательно. Учебник подразделяется на уроки. В каком ритме проходить обучение зависит от вас. Прочувствуйте то, как быстро вы усваиваете информацию.

Что Вам потребуется для работы с учебником?

В принципе, необходимости в дополнительной «экипировке» нет. Но имейте в виду, по статистике люди, которые просматривают страницы в Интернете для получения каких-либо знаний, НЕ делающие дополнительных записей или без практической проверки прочитанного, обычно эти знания быстро теряют.

В данном случае речь идет о сравнении термина «знание» и «информация». В связи с этим я бы вам посоветовал иметь под рукой какую-нибудь шахматную программу, или, что ещё лучше, обычную шахматную доску с фигурами.  

Я постарался сделать учебник максимально простым и доступным для восприятия, но, если вы считаете, что здесь чего-либо не хватает, либо какой-нибудь урок будет вам непонятен, напишите мне свои жалобы, комментарии, предложения итд.

Постараюсь отвечать оперативно ))

Итак, наконец добрались до самого учебника! </p>
<ol>
    <li> <a href="#" onmousedown="viewDiv1()">Знайомство з грою. Шахова дошка.</a> <br>
    <p>Загальне уявлення про шахи.</p>
    <div id="div1">
        <h2>Урок 1</h2>
        <h4>Урок 1. Знайомство з грою. Шахова дошка.</h4>
        <p>Наша перша тема носить скоріше філософський характер, ніж чисто практичний. Відповісти на питання «Що таке шахи» намагалися багато відомих людей: філософи, артисти, вчені. Для одних шахи це просто гра, проведення часу, для інших це спорт, змагання, можливість проявити свій характер і випробувати своє мислення. Для третіх - це мистецтво, що дозволяє творити за дошкою надзвичайно красиві етюди.</p> <br>
        <p>У шахів є свої фанати, здатні цілодобово проводити за дошкою, граючи одні й ті ж варіанти, загравшись, не помічаючи, що вже глибоко за північ. Є люди, які не розуміють шахи, і абсолютно що не жаліють про це. Одна моя родичка якось сказала: «Я не люблю шахи. Адже жодна нормальна дівчина не буде годинами сидіти за столом, і пересувати якісь фігурки! »</p><br>
        <p>Отже, <b>шахи</b> - це настільна інтелектуальна гра, в якій змагаються дві сторони з імітацією військових дій і практично невичерпним кількістю варіантів.</p><br>
        <p><b>Шахова дошка</b> - це місце, де проводиться шахова партія, тобто своєрідний полігон для ведення військових дій. Як сказали б любителі комп'ютерних стратегій «карта»</p><br>
        <p>Доска выглядит так:</p><br>
        
        <p class="im"><img src="/img/Doska.jpg" alt=""></p><br>
        <p>Про шахову дошку можна сказати наступне:</p>
        <ol>
        <li>Всього на дошці 64 клітини, з яких 32 «білі» і 32 «чорні». Пишу в лапках, тому що на деяких дошках «білі» і «чорні» клітини мають зовсім інші відтінки.</li>
        <li>Відповідно шахівниця це квадрат 8 на 8 клітин.</li>
        <li>На шахівниці НЕ працює одне з ключових правил геометрії, що полягає в тому, що гіпотенуза завжди довше катета. У шахах вони рівні. Дійсно з першої до останньої лінії всього 8 клітин, не важно вважати по вертикалі або по діагоналі.</li>
        <li>Обов'язкова умова розташування дошки: перша клітина зліва від грає повинна бути чорною.</li>
        </ol>
        <p>Тепер Ви знаєте, що собою представляють в цілому шахи і як виглядає шахівниця. <br>

        Далі належить дізнатися, як розташовуються шахові фігури на цій дошці.</p>
        <a href="#" onmousedown="viewDiv1()">Закрити</a>
    </div>    
    </li><br>
    <li><a href="#" onmousedown="viewDiv2()">Шахові фігури. Розташування фігур на дошці.</a> <br>
    <p>Які бувають фігури в шахах і як їх розставляти.</p>
    <div id="div2">
    <h2>Урок 2</h2>
        <h4>Урок 2. Шахові фігури. Розташування фігур на дошці.</h4>
        <p>У шаховій партії беруть участь 6 видів фігур. це:</p> <br>
        <ol>
        <li>Король <img src="/img/korol 01.gif" alt=""></li>
        <li>Ферзь <img src="/img/ferz 01.gif" alt=""></li>
        <li>Тура <img src="/img/ladia 01.gif" alt=""></li>
        <li>Слон <img src="/img/slon 01.gif" alt=""></li>
        <li>Кінь <img src="/img/kon_47.jpg" alt=""></li>
        <li>Пішак<img src="/img/Pawn.gif" alt=""></li></ol>
        <p>У кожній армії відповідно по одному королю і ферзеві, по дві тури, два слона, два коня і по вісім пішаків. <br>
        Виходить у кожної сторони по 16 фігур на початку гри. <br>
        Всього на дошці, відповідно 32 фігури, тобто на початку партії зайнято рівно 50% всієї дошки. <br>
        Початкова позиція виглядає так:</p><br>
        <p class="im"><img src="/img/Nachaln.jpg" alt=""></p><br>
        <p>Запам'ятати розташування фігур в початковій позиції досить просто - фігури стоять симетрично. Плутанина зазвичай відбувається тільки в розташуванні короля і ферзя (їх часто плутають місцями). Тут важливо запам'ятати тільки 1 правило: в початковій позиції ферзь стоїть на полі свого кольору.
        <br>Тобто білий ферзь в початковій позиції стоїть на білій клітинці, а чорний ферзь відповідно на чорній. <br> 
        Потренуйтеся пару раз ставити на дошці початкову позицію, навчитеся розрізняти фігури за назвою. Поки все логічно просто, складнощів виникнути не повинно :) <br>Тепер потрібно навчитися ходити цими фігурами і збивати фігури суперника.        </p>
        <a href="#" onmousedown="viewDiv2()">Закрити</a>
    </div>
    </li>
    <br>
    <li>
    <a href="#" onmousedown="viewDiv3()">Як ходять фігури? Пішак, Кінь.</a> <br>
    <p>Вчимося робити ходи конем і пішаком.</p>
    <div id="div3">
            <h2>Урок 3</h2>
            <h4>Урок 3.Як ходять фігури? Пішак, Кінь.</h4>
            <p>Отже, починається найцікавіше - треба визначити, як же можна здійснювати ходи фігурами.
            В даному уроці ми розглянемо дві перші фігури: пішака і коня.</p> <br>
            <h3>Пішак</h3>
            <p class="peshka"><img  src="/img/Pawn.gif" alt=""></p>
            <p>
            Ходять пішаки тільки вперед. Це єдина фігура, яка НЕ ​​може ходити і наносити удар назад або по горизонталі. Коли пішак знаходиться в початковій позиції (2-я горизонталь для білих, 7-я для чорних) своїм першим ходом вона може за бажанням грає піти на одне або на два поля вперед.</p>
            <p class="phod"><img src="/img/Peshka.jpg" alt=""></p>
            <p>Після свого першого ходу пішак пересувається тільки на одну клітку вперед за один хід.
            <br>
            Бити фігури суперника пішак може на одну клітку вперед по діагоналі вправо і вліво.</p>
            <p class="phod"><img src="/img/Pawn 2.jpg" alt=""></p>
            <p>Таким чином, пішак ходить вперед, а б'є по діагоналі на одну клітину. Це єдина фігура в шахах, яка ходить по одному правилу, а завдає удар по іншому. У решти фігур траєкторія ходу і удару збігається. Нижче наведено дві позиції. У позиції «A» білий пішак має цілих чотири варіанти ходу: може піти на одне або на два поля вперед, а також може вдарити одну з чорних фігур. У позиції «B» пішак не має жодного можливого ходу - попереду стоїть пішак суперника, і немає фігур, які можна вдарити.</p>
            <table border="1" align="center">
            <tr>
                <td> A
                </td>
                <td> B
                </td>
            </tr>
            <tr>
                <td><img src="/img/Pawn 3.jpg" alt=""> </td>
                <td><img src="/img/Pawn 4.jpg" alt=""> </td>
            </tr>
            </table>
            <p>З пішаком пов'язане одне з найцікавіших правил в шахах - правило перетворення. Полягає воно в наступному. Якщо пішак доходить до останньої горизонталі (8-я для білих пішаків і 1-я для чорних), вона перетворюється в будь-яку іншу фігуру (крім короля). Наочно це видно в позиціях нижче.</p>
            <table border="1" align="center">
            <tr>
            <td><img src="/img/Перед ходом.jpg" alt=""> </td>
                <td><img src="/img/После хода.jpg" alt=""> </td>
                
            </tr>
            <tr>
            <td> Перед ходом
                </td>
                <td> Після ходу
                </td>
            </tr>
            </table>
            <p>
            Пішак своїм ходом пішла на останню вертикаль і перетворилася в ферзя. Важливо розуміти, що таке перетворення є одним ходом. Тобто після такого перетворення черга ходу переходить до суперника.
            Ще одне правило, пов'язане з пішаком - правило взяття на проході - є по суті найскладнішим і розглянуто окремо в уроці 7.</p>
            <h3>Кінь</h3>
            <p class="peshka"><img  src="/img/kon_47.jpg" alt=""></p>
            <p>Кінь - сама «вертка» фігура на шаховій дошці. Він ходить по незвичайній траєкторії в порівнянні з іншими і є єдиною фігурою, яка може перестрибувати через інші фігури. Номінальна цінність коня - 3 очка.
            «Зробити хід конем» - в реальному житті, як відомо, так називають якийсь незвичайний або особливо хитрий крок.
            Кінь ходить буквою «Г». Траєкторія його ходу вказана нижче на діаграмі:</p>
            <p class="phod"><img src="/img/kon 1.jpg" alt=""></p>
            <p>Тобто кінь своїм ходом пересувається на 2 клітини вперед і одну клітку в сторону, утворюючи букву «Г». Таким ось чином кінь може пересуватися і наносити удари в будь-яку сторону. Перебуваючи в центрі дошки, він має вісім можливих ходів, а в самому кутку тільки два.</p>
            <table border="1" align="center">
            <tr>
                <td><img src="/img/kon 2.jpg" alt=""> </td>
                <td><img src="/img/kon 3.jpg" alt=""> </td>
            </tr>
            </table>
            <p>У загальному і цілому це все, що можна сказати про пішки і конях.

            Нижче вказані два невеликих завдання для того, щоб Ви запам'ятали принципи ходів пішака і коня. Якщо ви прочитали урок повністю проблем виникнути не повинно.</p>
            <table border="1" align="center">
            <tr>
            <td><img src="/img/kon 4.jpg" alt=""> </td>
                <td><img src="/img/kon 5.jpg" alt=""> </td>
                
            </tr>
            <tr>
            <td> Скільки ходів необхідно білому коню, щоб збити чорного пішака?
                </td>
                <td> Чорний кінь напав на білу пішака. Яким чином її можна захистити?
                </td>
            </tr>
            </table>
            <a href="#" onmousedown="viewDiv3()">Закрити</a>
                </div>
    </li><br>
    <li> 
        <a href="#" onmousedown="viewDiv4()">
        Як ходять фігури? Слон, Тура.</a> <br>
        <p>Вчимося ходити слоном і турою.</p>
        <div id="div4">
        <h2>Урок 4</h2>
        <h4>Урок 4. Як ходять фігури? Слон, Тура.</h4>
        <h3>Слон</h3>
        <p>Слон - це сильна, далекобійна фігура. Слон приблизно рівноцінний коню. Його номінальна цінність становить також 3 очка. Однак їх важко порівнювати. Вважається, що слон трохи сильніше коня. Але тут багато що залежить від характеру грає і від вимог позиції на дошці.
        Кінь і слон вважаються в шахах «легкими фігурами». Звучить, звичайно, дивно, в житті їх легкими ніяк не назвеш :) Але, як назвали, так назвали.</p>
        <p class="phod"><img  src="/img/Slon 1.jpg" alt=""></p>
        <p>Слон не може перестрибувати через фігури. Таким чином, якщо на шляху слона стоять інші фігури, його дія обмежена. На діаграмі нижче наочно видно, як свої ж фігури з трьох сторін обмежили слона. З четвертого боку на шляху слона стоїть чорний кінь. Перестрибувати через нього також не можна, але його можна хоча б вдарити :) Свої фігури, ясна річ, бити не можна.</p>
        <p class="phod"><img  src="/img/Slon 2.jpg" alt=""></p>
        <h3>Тура</h3>
        <p>
            Тура нарівні з ферзем, вважається важкою фігурою. Її номінальна вартість 5 очок. Тура вважається сильною, але при цьому прямолінійною і не дуже маневреної фігурою. <br>
            «Цю фігуру у війні можна порівняти з гарматою. Стріляє сильно і далеко. З огляду на її високу номінальної вартості краще її берегти і тримати трохи відтягнути, не пускаючи в гущу подій », такий ліричний відступ про турі наводить один з італійських шахових викладачів. <br>
            Отже, човен ходить і б'є по прямій на будь-які відстані і в усі сторони (вперед, назад, вправо і вліво). Не може перестрибувати через інші фігури. Все, що було сказано про обмеження слона, стосується і тури.
        </p>
        <p class="phod"><img  src="/img/Ladia 1.jpg" alt=""></p>
        <p>
            Таким чином, для того щоб тура приносила максимальну користь її бажано ставити на відкриті вертикалі. <br>
            Нижче вказані легкі завдання для того, щоб запам'ятати, як ходять тура і слон.
        </p>
        <table border="1" align="center">
            <tr>
            <td><img src="/img/Slon 3.jpg" alt=""> </td>
                <td><img src="/img/Slon 4.jpg" alt=""> </td>
                
            </tr>
            <tr>
            <td> <b>хід білих</b> <br>
                Яким ходом білий слон може, одночасно напасти на чорну туру і коня?
                </td>
                <td><b>хід чорних </b> <br>
                Тура може вдарити білого слона. Чи вигідний такий удар чорним? Обгрунтуйте свою відповідь
                </td>
            </tr>
            </table>
            <a href="#" onmousedown="viewDiv4()">Закрити</a>
        </div>
    </li><br>
    <li>
    <a href="#" onmousedown="viewDiv5()">
        Як ходять фігури? Ферзь, Король.</a> <br>
        <p>Вчимося ходити королем і ферзем.</p>
        <div id="div5">
            <h2>Ферзь.</h2>
            <h4>Урок 4. Як ходять фігури? Ферзь, Король.</h4>
            <h3>Ферзь</h3>
            <p>
                Ферзь - найсильніша шахова фігура. Номінальна вартість 9 очок.
                Як сказав кардинал Рішельє, граючи в шахи з д'Артаньяном: «Це королева, вона ходить як завгодно ...». Кардинал сказав по суті вірно, за винятком того, що «королева» - не найправильніше назва. Ця фігура називається «Ферзь». <br>
                Ферзь ходить на всі боки по вертикалі і діагоналі на будь-які відстані. Тобто, він має можливості тури і слона одночасно. НЕ може перестрибувати через фігури. Схематично вказано на діаграмі нижче.
            </p>
            <p class="phod"><img  src="/img/Ferz 1.jpg" alt=""></p>
            <p>
                Важливість ферзя складно переоцінити. Він дуже ефективний і в захисті, і в нападі, дуже мобільний і сильний. Єдиний мінус, який пов'язаний з ферзем, це те, що його треба оберігати від нападів. Наприклад, в позиції на наступній діаграмі ферзь білих може вдарити одну з декількох фігур чорних: коня, слона і пішака. Однак всі ці фігури знаходяться під захистом чорного ферзя. Якщо білий ферзь вирішить вдарити будь-кого з них, наступним своїм ходом чорний ферзь вдарить білого. І будь-який такий розмін білим буде невигідний, адже вони втратять своєї найсильнішої фігури, а заберуть за неї фігуру меншої вартості.
            </p>
            <p class="phod"><img  src="/img/Ferz 2.jpg" alt=""></p>
            <p>Поміняти ферзя, скажімо на коня або слона практично завжди не вигідно. Рівноцінно ферзя можна поміняти лише на ферзя суперника, або відразу на кілька фігур. Хоча бувають випадки, коли шахісти спеціально віддають ферзя для досягнення будь-якої задачі. Але про це пізніше. Поки вам необхідно усвідомити, що ферзя варто берегти і використовувати раціонально як найсильніша ваша зброя.</p>
            <h3>Король</h3>
            <p>
                Король - найголовніша фігура. Він не має номінальної вартості. Його не можна розмінювати, тримати під боєм фігур суперника. Він вимагає постійного захисту. Але це не тому, що король дуже вже слабкий як фігура, а тому, що якщо він гине, то партія для граючого програна. <br>
                З іншого боку, король також може пересуватися і бити фігури суперника. В кінці гри, коли фігур на дошці на порядок менше, і прямих погроз королю не так багато, його сила оцінюється приблизно як сила легкої фігури (коня або слона). <br>
                Король, як і ферзь, ходить і завдає ударів на всі боки по вертикалі і діагоналі, але тільки на одну клітку.
            </p>
            <p class="phod"><img  src="/img/Korol 1.jpg" alt=""></p>
            <p>
                Тобто, перебуваючи в середині дошки, король пробиває 8 полів. <br>
                Тепер Ви знаєте, як ходять і завдають ударів шахові фігури. Щоб запам'ятати кожну, необхідно попрактикуватися. Для того, щоб ця практика пройшла швидко і весело і при цьому ефективно, пропоную пограти в так званий "Шаховий лабіринт":
            </p>
            <p class="phod"><img  src="/img/Labirint.jpg" alt=""></p>
            <p>
                Сценарій наступний: білий король, це ви. Пішаки, це стіни вашого будинку. Їх рухати не можна. Чорний кінь це гість, якого потрібно зустріти. Іншими словами, треба королем дійти до коня. Як ходить король, думаю, ви пам'ятаєте. <br>
                По суті все просто, король по одній клітці доходить до коня, але не зовсім ... У вас вдома купа меблів, яка заважає дістатися до гостя. Наприклад, ось так:
            </p>
            <p class="phod"><img  src="/img/Labirint1.jpg" alt=""></p>
            <p>
                Меблі необхідно відсувати, щоб розчистити собі дорогу. Завдяки цій грі, ви зможете швидко запам'ятати, як пересувається кожна одиниця цієї «меблів» :) <br> 
                Ускладнюйте собі завдання до тих пір, поки в вашому домі залишиться дуже мало простору. Наприклад, ось так:
            </p>
            <p class="phod"><img  src="/img/Labirint4.jpg" alt=""></p>
            <p>
                1-2 години в день, приблизно 1-2 дня в залежності від ваших особистих особливостей. Упевнений, після цього як ходять фігури ви не забудете. <br>
                Тепер, коли ми знаємо, як ходять фігури, було б здорово визначити, що з ними робити, тобто з'ясувати мету гри. Про це в наступному уроці.
            </p>
            <a href="#" onmousedown="viewDiv5()">Закрити</a>
        </div>
    </li><br>
    <li>
    <a href="#" onmousedown="viewDiv6()">
        Як ходять фігури? Ферзь, Король.</a> <br>
        <p>Вчимося ходити королем і ферзем.</p>
        <div id="div6">
            <h2>Урок 6.</h2>
            <h4>Урок 6. Порівняльна сила фігур. Ціль гри.</h4>
            <h3>Ферзь</h3>
            <p>
                Отже, ми з вами навчилися ходити і бити всіма шаховими фігурами. <br><br>
                Тепер постають інші питання, якою є їхня вартість, їх цінність? Яка мета гри? <br><br>
                Оцінити силу кожної фігури надзвичайно складно. Номінальна вартість описана в попередніх уроках, але реальна сила фігури залежить від маси факторів, серед яких централізація, робочий простір, перспектива ... Якщо бути точніше, сила фігури залежить від конкретної шахової позиції. А цих позицій може бути безліч. <br><br>
                Але є приблизна, номінально вартість, від якої можна відштовхуватися: <br>
                    <ul>
                        <li>Пішак - 1 очко</li>
                        <li>Кінь і слон - 3 очка</li>
                        <li>Тура - 5 очок</li>
                        <li>Ферзь - 9 очок</li>
                        <li>Король - безцінний...</li>
                    </ul>
                Деякі теорії вартості шахових фігур стверджують, що слон трохи сильніше коня, а дві тури трохи сильніше ферзя. Але повторю ще раз, дуже багато залежить від конкретної позиції. Буває, що і кінь сильніше ферзя, правда рідко. <br><br>
                Для чого нам потрібно знати порівняльну силу фігур? По-перше, вона визначає загальну корисність фігури. Тобто тура, зазвичай приносить більше користі на дошці, ніж скажімо слон. По-друге, цінність фігури потрібно усвідомлювати при розмінах. <br><br>
                Наприклад, якщо кінь суперника нападає на вашого слона. А ваша човен слона захищає, то, загалом, боятися нема чого - якщо кінь наступним ходом вдарить слона, то ваша човен вдарить коня. Вийде розмін три на три. <br>
                <p class="phod"><img  src="/img/cennost 1.jpg" alt=""></p>
                А ось якщо за місце слона буде стояти ваш ферзь, то варто негайно подбати про його порятунок - відвести на безпечну позицію, інакше чорні вдарять ферзя, ви таким ходом вдарите коня чорних. Вийде вкрай невигідний для білих розмін - віддали 9 взяли 3. <br>
                <p class="phod"><img  src="/img/cennost 2.jpg" alt=""></p>
                Але повторю ще раз (здається вже третій) багато що залежить від конкретної позиції. Буває, що більш сильна фігура віддається за слабшу (або взагалі безкоштовно) спеціально, для досягнення вищої мети. Це називається "жертва". <br><br>
                Тепер давайте, визначимо чітку кінцеву мету шахової партії. Мета - перемога. Щоб її досягти, необхідно поставити королю суперника мат. Мат в шахах - це напад на короля, від якого немає захисту.<br><br>
                Нижче вказані для прикладу дві позиції, де чорному і білому королю оголошено мат. Відповідно в першій позиції перемогли білі, в другій - чорні. <br>
                <p class="phod"><img  src="/img/mat.jpg" alt=""></p> <br> <br>
                <p class="phod"><img  src="/img/mat2.jpg" alt=""></p> <br> <br>
                У першій позиції біла тура напала на чорного короля. При цьому королю заважають власні пішаки втекти на 7-й ряд. У другій позиції чорна тура напала на білого короля. При цьому друга тура не дозволяє королю піти на 2-ю горизонталь. Такий мат прийнято називати "лінійним".<br> <br>
                Таким чином, фігури є інструментом досягнення кінцевої мети. Чим більше і сильніше фігури у вас і чим менший і слабший фігури у суперника, тим простіше буде поставити мат королю суперника.<br> <br>
                Але з'їсти більше фігур суперника не є першочерговим завданням. Навіть якщо фігур у вас мало, але ви поставили королю суперника мат - ви перемогли.<br> <br>
                Нижче дано дві задачі. В обох хід білих і треба поставити мат за 1 хід чорному королю.<br> <br>
                Якщо ви чітко пам'ятаєте, як ходять шахові фігури і знаєте, що таке мат, проблем бути не повинно.<br> <br>
                <p class="phod"><img  src="/img/mat3.jpg" alt=""> <img  src="/img/mat4.jpg" alt=""></p> <br> 
                У наступному уроці ми освоїмо ще два останніх правила ходу в шахах. І тоді ви зможете вже почати практикуватися і застосовувати отримані знання.
                </p>
                <a href="#" onmousedown="viewDiv6()">Закрити</a>
        </div>
        
    </li><br>
    <li>
    <a href="#" onmousedown="viewDiv7()">
    Рокіровка, взяття на проході.</a> <br>
        <p>Найбільш складні правила в шахах.</p>
        <div id="div7">
            <h2>Урок 7.</h2>
            <h4>Урок 7. Рокіровка, взяття на проході.</h4>
            <p>У цьому уроці ми познайомимося ще з двома правилами в шахах. Вони були спеціально взяті в окрему тему, так як їх не завжди відразу запам'ятовують початківці шахісти.</p><br><br>
            <h3>Рокіровка</h3> <br>
            <p>
                Ми вже говорили про те, що король найважливіша фігура на шаховій дошці, і, тому, він потребує постійного захисту. Зазвичай на початку партії боротьба зав'язується в центрі. Саме там, де розташований король. Тому постає питання, куди його сховати від потенційного обстрілу фігур суперника. Відповідь - зробити рокіровку! <br><br>
                Рокіровка - це хід в шахах, при якому король перестрибує через одне поле вправо, або вліво, а тура закриває його, встаючи на сусіднє поле. <br><br>
                Рокіровку можуть робити і білі і чорні. Рокіровка буває коротка і довга. Коротка робиться в сторону королівського флангу, довга в сторону ферзевого флангу. Візуально як роблять рокіровку білі і чорні показано на діаграмах нижче. <br><br> 
            </p>
            <h3>Kоротка рокіровка</h3>
            <p>
            <table border="1" align="center">
            <tr>
                <td><img src="/img/rokirovka1.jpg" alt=""> </td>
                <td><img src="/img/rokirovka2.jpg" alt=""> </td>
            </tr>
            <tr>
            <td> 
                коротка рокіровка
                </td>
                <td>після рокіровки
                </td>
            </tr>
            </table>
            </p>
            <h3>довга рокіровка</h3>
            <p>
            <table border="1" align="center">
            <tr>
                <td><img src="/img/rokirovka3.jpg" alt=""> </td>
                <td><img src="/img/rokirovka4.jpg" alt=""> </td>
            </tr>
            <tr>
            <td> 
                коротка рокіровка
                </td>
                <td>після рокіровки
                </td>
            </tr>
            </table>
            </p>
            <p>
                Таким чином, король буде надійно захищена, і про його безпеку можна піклуватися в меншій мірі. <br><br>
                Рокіровку можна робити, якщо дотримуються наступні правила: <br><br>
                <ol>
                    <li>Ні король, ні тура, з якої робиться рокіровка, що не робили до цього жодного ходу.</li>
                    <li>Між королем і турою немає інших фігур.</li>
                    <li>Королю не оголошений шах. Тобто, якщо вам оголосили шах, то рокіровку в цей момент робити не можна.</li>
                    <li>Поле, через яке перестрибує король і поле, на яке він стає пробивається фігурами противника.</li>
                </ol>
                Рокіровка вважається одним ходом, незважаючи на те, що участь в ній беруть дві фігури. Рокіровку можна робити тільки один раз за партію.
            </p>
            <h3>Взяття на проході.</h3>
            <p>
                Взяття на проході - це хід, при якому пішак може вдарити пішака суперника, якщо та перестрибнула через бите поле. <br> <br>
                Як ви пам'ятаєте, з 3-го уроку, своїм першим ходом пішак може піти на два поля вперед, тобто одне поле перестрибнути. Якщо це поле, пробивається пішаком суперника, то вона може зробити взяття. <br><br>
                Наочно це виглядає так:
            </p>
            <p>
            <table border="1" align="center">
            <tr>
                <td><img src="/img/na prohode 1.jpg" alt=""> </td>
                <td><img src="/img/na prohode 2.jpg" alt=""> </td>
            </tr>
            <tr>
            <td> 
            1) Біла пішак щойно пішла на два <br> ходи вперед. Поле, яке вона <br> перестрибнула пробиває чорна пішак
                </td>
                <td>2) Чорна пішак збиває білу. <br> При цьому стає на бите поле
                </td>
            </tr>
            </table>
            </p>
            <p>
                Таким чином, чорна пішак вдарила білу і при цьому встала на бите поле, а не на полі де стояла біла пішак, як це буває при звичайних ударах. При цьому зробити взяття на проході можна лише на наступний хід, інакше потім це право втрачається. <br><br>
                Це правило не завжди сприймається легко з першого разу. Прочитайте ще раз :). Коли я вчився грати, то зрозумів тільки з другого разу.<br><br>
                У наступному уроці ми повторимо поняття "шах" і "мат" поговоримо про можливі результати шахової партії.
            </p>
            <a href="#" onmousedown="viewDiv7()">Закрити</a>
        </div>
    </li><br>
    <li>
        <a href="#" onmousedown="viewDiv8()">
        Шах і мат. Результат партії.</a> <br>
        <p>Вчимося ставити мат. Розбираємося з результатами партії.</p>
        <div id="div8">
        <h2>Урок 8.</h2>
            <h4>Урок 8. Шах і мат. Результат партії.</h4>
            <p>
                Давайте ще раз розберемо поняття шах і мат. <br><br>
                Шах - це напад на короля суперника. <br>           
                Від шаха є три варіанти захисту:
            </p><br><br>
            <ol>
                <li>Піти королем.</li>
                <li>Прикрити короля будь-якої фігурою.</li>
                <li>Вдарити фігуру противника, яка оголошує шах.</li>
            </ol>       
            <p class="phod"><img  src="/img/shah1.jpg" alt=""></p> <br> <br>   
            <p>
                У позиції на діаграмі чорна тура оголосила шах білому королю. Білі можуть захиститися трьома варіантами:
            </p>  
            <ol>
                <li>Король може піти від шаха.</li>
                <li>Слон може прикрити короля від нападу.</li>
                <li>Ферзь може вдарити чорну туру і зняти напад з короля.</li>
            </ol>  <br><br>
            <p>Мат - це шах, від якого немає захисту.</p> <br><br>
            <p class="phod"><img  src="/img/shah2.jpg" alt=""></p> <br> <br> 
            <p>
            У даній позиції чорна тура також напала на короля білих, але королю бігти нікуди, прикритися нічим, і також нічим вдарити чорну туру. Значить це мат, чорні виграли. <br><br>
            Всього в шаховій партії можуть бути три види результату:
            </p>
            <ul>
                <li>виграш білих.</li>
                <li>виграш чорних.</li>
                <li>нічия.</li>
            </ul>  <br><br>
            <p>За традиційною системою підрахунку за перемогу дається 1 очко. За нічию 0,5 очка. За поразку 0. <br><br>
               За статистикою білі перемагають частіше, ніж чорні, так як вони роблять перший хід. Перемога тій чи іншій стороні присуджується в разі, якщо поставлений мат супернику або якщо одна із сторін здається на увазі неминучої поразки. У професійних змаганнях шахи грають на час, тобто кожному гравцеві дається певна кількість часу на роздуми. Якщо час закінчується, зараховується поразка. <br><br>
               Що таке нічия, і в яких випадках вона фіксується, ми розберемо в наступному уроці.
            </p>
            <a href="#" onmousedown="viewDiv8()">Закрити</a>
        </div>
    </li><br>
    <li></li><br>
    <li></li><br>
    <li>
    <a href="#" onmousedown="viewDiv11()">
    Bажливість практики.</a> <br>
        <p>Загальні рекомендації і висновок.</p>
        <div id="div11">
           
                <h2>Урок 11</h2>
                <h4>Урок 11. Bажливість практики.</h4>
                <p>
                Людина вчиться все своє життя, починаючи з дитячого садка і практично до останніх днів. Однак, реальних навичок у людини лічену кількість. Учень в школі майже впевнений, що ніколи не забуде, що в цьому році він навчався в такому-то класі, проходив, такі-то предмети і спілкувався з однокласниками, яких звуть так-то. <br><br>
                Через кілька років він раптом починає розуміти, що забув більшу частину того, що було тоді. У пам'яті залишилися лише найбільш яскраві епізоди. <br><br>
                Дорослішаючи, людина практично не змінюється в цьому відношенні. З роками з'являється багато обов'язків, збільшується взаємодія з людьми, через людський мозок проходить величезна кількість інформації, велика частина з якої випаровується. Багато ходять на додаткові курси тренінги і т.п. Однак результат від навчання далеко не завжди буває прийнятним. <br><br>
                І все це через відсутність практики. Як відомо, в процесі навчання будь-якого досвіду необхідно 30% часу приділяти теорії і 70% практики. На ділі багато людей читають розумні книги і підручники, а потім просто забувають про те, що в них написано. Як говорить відома приказка: «Не говори чого вчився, а говори, що дізнався». <br><br>
                Мені б дуже хотілося, щоб вся та інформація, яку Ви отримали в цьому підручнику, була практично корисна для вашого досвіду шахової гри. Для цього необхідна практика. Ідеальний варіант - будь-хто з ваших рідних і близьких, вже непогано грає в шахи. Головне, не боятися програвати більш сильному опоненту. Завдяки цим програшів ваш рівень буде рости надзвичайно швидко. <br><br>
                Якщо ж немає знайомих, підійде комп'ютер. Існує дуже велика кількість ігрових шахових програм, які можна придбати в магазинах. Якщо такий варіант не влаштовує, програму можна завантажити з Інтернету. Найбільш відомі марки: Chessmaster, Fritz, Shredder, Rybka. Якщо не можете знайти, де скачати нормальну програму - напишіть. Постараюся знайти і вислати посилання на скачування. <br><br>
                З комп'ютером грати, звичайно, не так цікаво як з живими людьми, але грає він точніше людини. Випадкових помилок від нього не дочекаєтеся. Раджу ставити не найсильніший рівень (їх і гросмейстери обіграти не можуть) налаштуйте рівень опонента трохи сильніше себе, щоб було цікаво і було куди рости. Крім того, в Інтернеті є багато ігрових зон, де можна грати з іншими людьми online. <br><br>

                </p>
        </div>
    </li><br>
</ol>
<?
    bottom();
?>