package packageExercicio;

public class Funcionario {
    String nome;
    double salario;
    
    void aumento (double valor) {
       this.salario += valor;
   }
    
    double consultaNovoSalario (){
       return this.salario; 
   }
}
