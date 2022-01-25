<div class="w3-half w3-margin-top">
    <form method="post" action="index.php?id=excel" enctype = "multipart/form-data" class="w3-container w3-card-4">
        <p>
            <input type="file" name="excel" accept="application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" required/>
        </p>
        <p>
            <select class="w3-select" name="formKierunek">
                <option value="inf">Informatyka</option>
                <option value="iie">Informatyka i Ekonometria</option>
            </select>
        </p>
        <p>
            <select class="w3-select"  name="formTryb">
                <option value="stac">Stacjonarne</option>
                <option value="nstac">Niestacjonarne</option>
            </select>
        </p>
        <p>
            <select class="w3-select"  name="formStopien">
                <option value="inz">Inżynierskie</option>
                <option value="mgr">Magisterskie</option>
            </select>
        </p>
        <p>
            <input class="w3-radio" type="checkbox" name="specOK" value="Tak" /><label> Wybierz specjalizację</label>
        </p>
        <p>
            <select class="w3-select" name="spec" onchange="setTextField(this)">
            <optgroup label="Informatyka Inżynierskie">
                <option value="ii1">Systemy informacyjne i analityczne w gospodarce</option>
                <option value="ii2">Inżynieria systemów informacyjnych</option>
                <option value="ii3">Inżynieria systemów komputerowych</option>
                <option value="ii4">Techniki multimedialne</option>
            </optgroup>
            <optgroup label="Informatyka Magisterskie">
                <option value="im1">Systemy komputerowe</option>
                <option value="im2">Systemy inteligentne</option>
                <option value="im3">Systemy informatyki gospodarczej</option>
                <option value="im4">Zastosowania multimediów</option>
            </optgroup>
            </select>
        </p>
        <input id="make_text" type = "hidden" name = "specText" value = "" />
        <p><button type="submit" name="formSubmit" class="w3-button w3-section w3-indigo w3-ripple">Dalej</button></p>
    </form>
</div>
