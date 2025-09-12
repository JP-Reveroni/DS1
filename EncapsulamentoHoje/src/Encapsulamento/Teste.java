
package Encapsulamento;

public class Teste {

    public static void main(String[] args) {
        Funcionario f= new Funcionario();
        
        //f.nome = "Joao ferias"; //Sem Encapsulamento
        f.setNome("Joao ferias"); //Com Encapsulamento
        
        //f.salario = 1250; //Sem Encapsulamento
        f.setSalario(20000); //Com Encapsulamento
        
        //System.out.println(f.nome); //Sem Encapsulamento
        System.out.println(f.getNome()); //Com Encapsulamento
        
        //System.out.println(f.salario); //Sem Encapsulamento
        System.out.println(f.getSalario()); //Com Encapsulamento
    }
    
}
