<div class="ppi-membership">

<h2>POTENTIAL PIONEERS INITIATIVES (PPI)</h2>
<p>“Kufungua Uwezo. Kujenga Ujuzi. Kujenga Maisha Yenye Kusudi.”</p>
<p>Namba ya Usajili: 00NGO/R/8334 | Tovuti: www.ppi.or.tz | Barua pepe: info@ppi.or.tz</p>

<h3>FOMU YA UANACHAMA NA USAJILI WA MTOTO KATIKA PROGRAMU ZA PPI</h3>
<p>Tafadhali jaza taarifa zote kwa usahihi. Sehemu zenye chaguo zinaweza kuwekwa alama ya ✓.</p>

<form>
    <h4>SEHEMU A: TAARIFA ZA MTOTO</h4>
    <div class="mb-2">
        <label>1. Jina kamili la mtoto</label>
        <input class="form-control" type="text" name="child_name" />
    </div>
    <div class="row">
        <div class="col-md-4 mb-2">
            <label>2. Tarehe ya kuzaliwa</label>
            <input class="form-control" type="date" name="dob" />
        </div>
        <div class="col-md-4 mb-2">
            <label>3. Umri</label>
            <input class="form-control" type="number" name="age" />
        </div>
        <div class="col-md-4 mb-2">
            <label>4. Jinsia</label>
            <select class="form-control" name="gender">
                <option value="">-- Chagua --</option>
                <option value="male">Mvulana</option>
                <option value="female">Msichana</option>
            </select>
        </div>
    </div>

    <h4>SEHEMU B: TAARIFA ZA MZAZI/MLEZI</h4>
    <div class="mb-2">
        <label>1. Jina kamili la mzazi/mlezi</label>
        <input class="form-control" type="text" name="parent_name" />
    </div>

    <div class="mb-2">
        <label>3. Namba ya simu</label>
        <input class="form-control" type="text" name="phone" />
    </div>

    <div class="mb-2">
        <label>5. Anwani ya barua pepe</label>
        <input class="form-control" type="email" name="email" />
    </div>

    <div class="mb-3">
        <a href="{{ route('partnership.instructions', ['lang' => 'sw']) }}" class="btn btn-secondary" target="_blank">Pakua Mwongozo wa Usajili (PDF)</a>
    </div>

</form>

</div>