package packageExercicio;

public class TestaFuncionario {

    public static void main(String[] args) {
        Funcionario f1 = new Funcionario();
        
        f1.nome = "Joao Pedro";
        f1.salario = 3275 ;
                
        Funcionario f2 = new Funcionario();
        
        f2.nome = "Jaqueline Emerenciano";
        f2.salario = 2013 ;
        
        System.out.println(f1.nome);
        System.out.println(f1.salario);
        
        System.out.println(f2.nome);
        System.out.println(f2.salario);
        
        f1.aumento(500);
        f1.consultaNovoSalario();
        
        f2.aumento(1000);
        f2.consultaNovoSalario();
        
        System.out.println(f1.nome  +  "Novo Salario: " + f1.consultaNovoSalario() );
        System.out.println(f2.nome  +  "Novo Salario: " + f2.consultaNovoSalario() );
    }
    
}
