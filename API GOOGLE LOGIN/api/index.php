<script src="https://accounts.google.com/gsi/client" async defer></script>
<div id="g_id_onload"
    data-client_id="471307138333-njh18r1rajueo4auooa4mtutban1p6dt.apps.googleusercontent.com"
    data-auto_prompt="false"
    data-callback="handleCredentialResponse">
</div>

<button onclick="signOut()">Sign out</button>

<div class="g_id_signin" data-type="standard"></div>

<script>
function handleCredentialResponse(response) {
    console.log("ID Token:", response.credential);
    
    const data = parseJwt(response.credential);
    alert("Bem-vindo, " + data.name + "\n" + data.email + "\n" + data.picture + "!"); 
}

function signOut() {
    google.accounts.id.disableAutoSelect(); 
    alert("Você saiu da conta.");
}

function parseJwt(token) {
            const base64Url = token.split('.')[1];
            const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/'); 
            return JSON.parse(atob(base64));
        }
</script>
