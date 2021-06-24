@if(session('user') != null && session('user')->is_admin == 0)
    <div class="col-lg-4 col-md-12 col-sm-12 pb-lg-10 d-none d-lg-block d-xl-block">
        <ul class="mx-0 px-0 pt-12 list-unstyled">
            <li class="mb-3"><span class="initialism">Compte</span></li>
            <li class="mb-2"><a class="btn-link" href="/profileForm">Modifier mes informations</a></li>
            <li class="mb-2"><a class="btn-link" href="/passwordForm">Modifier mon mot de passe</a></li>
            <li class="mb-2"><a class="btn-link" href="">Gérer mon abonnement</a></li>
        </ul>
    </div>
@elseif(session('user') != null && session('user')->is_admin == 1)
    <div class="col-lg-4 col-md-12 col-sm-12 pb-lg-10 d-none d-lg-block d-xl-block">
        <ul class="mx-0 px-0 pt-12 list-unstyled">
            <li class="mb-3"><span class="initialism">Gestion</span></li>
            <li class="mb-2"><a class="btn-link" href="/usersList">Gérer les utilisateurs</a></li>
            <li class="mb-2"><a class="btn-link" href="/newsList">Gérer les actualités</a></li>
            <li class="mb-2"><a class="btn-link" href="https://dashboard.stripe.com/test/payments" target="_blank">Gérer les abonnements</a></li>
            <br>
            <li class="mb-3"><span class="initialism">Compte</span></li>
            <li class="mb-2"><a class="btn-link" href="/profileForm">Modifier mes informations</a></li>
            <li class="mb-2"><a class="btn-link" href="/passwordForm">Modifier mon mot de passe</a></li>
        </ul>
    </div>
@endif