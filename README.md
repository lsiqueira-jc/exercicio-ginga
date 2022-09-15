<input type="texto" name="aluno" class="form-control" placeholder="" >
<button type="submit" class="btn btn-primary"></button>



 public function index(){
        return view('index');
    }

    public function cadastro(Request $request){
        $nome = $request->input('aluno');
        $time = "azul";
        $this->sorteio();

        return view('cadastro',compact('time','nome'));
    }


    public function sorteio(){
        $times = array("azul","amarelo","verde","vermelho");

        dd($times[rand(0,3)]);
    }
