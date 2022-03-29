<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_auteticacao, $perfil)
    {
        //verifica se o usuário possui acesso a rota
        echo $metodo_auteticacao.' - '.$perfil. '<br>';

        if($metodo_auteticacao == 'padrao'){
            echo 'Verificar o osuário e senha no banco de dados'.' - '.$perfil. '<br>';
        }

        if($metodo_auteticacao == 'ldap'){
            echo 'Verificar o osuário e senha no AD'.' - '.$perfil. '<br>';
        }

        if($perfil == 'visitante'){
            echo 'Exibir apenas alguns recursos';
        }else{
            echo 'Carrregar o perfil do banco de dados';
        }

        if(false){
            return $next($request);
        } else {
            return Response('Acesso Negado!! A rota exirge autenticação');
        }
 
        
    }
}
