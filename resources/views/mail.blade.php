<p>
     {{-- Bonjour {{ $data['nom'] }} {{ $data['prenom'] }},<br> --}}

     <br>
     {{ $data['message'] }}

     <br>
</p>

{{-- @dump('/storage/$data['pj']') --}}
{{-- 
<a href="{{ asset('storage/' . $data['pj']) }}" class="text-sm"
     onclick="event.preventDefault(); downloadPDF('{{ asset('storage/' . $data['pj']) }}');">
     <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round"
               d="M7.5 7.5h-.75A2.25 2.25 0 004.5 9.75v7.5a2.25 2.25 0 002.25 2.25h7.5a2.25 2.25 0 002.25-2.25v-7.5a2.25 2.25 0 00-2.25-2.25h-.75m-6 3.75l3 3m0 0l3-3m-3 3V1.5m6 9h.75a2.25 2.25 0 012.25 2.25v7.5a2.25 2.25 0 01-2.25 2.25h-7.5a2.25 2.25 0 01-2.25-2.25v-.75">
          </path>
     </svg>
</a>




<script>
     function downloadPDF(url) {
          var xhr = new XMLHttpRequest();
          xhr.open('GET', url, true);
          xhr.responseType = 'blob';
          xhr.onload = function(e) {
               if (this.status == 200) {
                    var blob = new Blob([this.response], {
                         type: 'application/pdf'
                    });
                    var url = window.URL.createObjectURL(blob);
                    var a = document.createElement('a');
                    a.href = url;
                    a.download = 'appelle.pdf';
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);
                    window.URL.revokeObjectURL(url);
               }
          };
          xhr.send();
     }
</script> --}}