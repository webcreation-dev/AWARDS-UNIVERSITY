<!DOCTYPE html>
<!-- saved from url=(0054)https://preview.colorlib.com/theme/bootstrap/table-06/ -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Statistiques | Awards University</title>

    <link rel="apple-touch-icon" href="assets/images/fav.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/logo.png">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href={{asset('stat/css')}} rel="stylesheet" type="text/css">
    <link rel="stylesheet" href={{asset('stat/font-awesome.min.css')}}>
    <link rel="stylesheet" href={{asset('stat/style.css')}}>
    <script defer="" referrerpolicy="origin" src={{asset('stat/s.js.téléchargement')}}></script>
    <script nonce="ab3a2138-7822-432e-aa08-0d62933c874d">
        (function(w,d){!function(dp,dq,dr,ds){dp[dr]=dp[dr]||{};dp[dr].executed=[];dp.zaraz={deferred:[],listeners:[]};dp.zaraz.q=[];dp.zaraz._f=function(dt){return async function(){var du=Array.prototype.slice.call(arguments);dp.zaraz.q.push({m:dt,a:du})}};for(const dv of["track","set","debug"])dp.zaraz[dv]=dp.zaraz._f(dv);dp.zaraz.init=()=>{var dw=dq.getElementsByTagName(ds)[0],dx=dq.createElement(ds),dy=dq.getElementsByTagName("title")[0];dy&&(dp[dr].t=dq.getElementsByTagName("title")[0].text);dp[dr].x=Math.random();dp[dr].w=dp.screen.width;dp[dr].h=dp.screen.height;dp[dr].j=dp.innerHeight;dp[dr].e=dp.innerWidth;dp[dr].l=dp.location.href;dp[dr].r=dq.referrer;dp[dr].k=dp.screen.colorDepth;dp[dr].n=dq.characterSet;dp[dr].o=(new Date).getTimezoneOffset();if(dp.dataLayer)for(const dC of Object.entries(Object.entries(dataLayer).reduce(((dD,dE)=>({...dD[1],...dE[1]})),{})))zaraz.set(dC[0],dC[1],{scope:"page"});dp[dr].q=[];for(;dp.zaraz.q.length;){const dF=dp.zaraz.q.shift();dp[dr].q.push(dF)}dx.defer=!0;for(const dG of[localStorage,sessionStorage])Object.keys(dG||{}).filter((dI=>dI.startsWith("_zaraz_"))).forEach((dH=>{try{dp[dr]["z_"+dH.slice(7)]=JSON.parse(dG.getItem(dH))}catch{dp[dr]["z_"+dH.slice(7)]=dG.getItem(dH)}}));dx.referrerPolicy="origin";dx.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(dp[dr])));dw.parentNode.insertBefore(dx,dw)};["complete","interactive"].includes(dq.readyState)?zaraz.init():dp.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);
    </script>
</head>

<body cz-shortcut-listen="true">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-4">
                    <h2 class="heading-section">STATISTIQUES DES VOTES DE L'EVENEMENT</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>CANDIDAT</th>
                                    <th>NOM</th>
                                    <th>CATEGORIE</th>
                                    <th>VOTE</th>
                                    <th>TOTAL</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($votes as $vote)
                                    <tr class="alert" role="alert">
                                        <td>
                                            <label class="checkbox-wrap checkbox-primary">
                                                <input type="checkbox" checked="">
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="img" style="background-image: url('{{ asset('candidats/' . $vote->category_id . '/' . $vote->image) }}');"></div>
                                        </td>
                                        <td>
                                            <div class="email">
                                                <span> {{$vote->firstname}} </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="email">
                                                <strong> {{$vote->category_name}} </strong>
                                            </div>
                                        </td>
                                        <td>{{$vote->count}}</td>

                                        <td>{{$vote->prix}}</td>
                                        <td>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src={{asset('stat/jquery.min.js.téléchargement')}}></script>
    <script src={{asset('stat/popper.js.téléchargement')}}></script>
    <script src={{asset('stat/bootstrap.min.js.téléchargement')}}></script>
    <script src={{asset('stat/main.js.téléchargement')}}></script>
    <script defer="" src={{asset('stat/v84a3a4012de94ce1a686ba8c167c359c1696973893317')}}
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon="{&quot;rayId&quot;:&quot;83bcfa2cc937488e&quot;,&quot;version&quot;:&quot;2023.10.0&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;}"
        crossorigin="anonymous"></script>


</body>

</html>
