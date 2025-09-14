package heranca3;

public class TestaFuncionarios {

    public static void main(String[] args) {
        Gerente g = new Gerente();
        //Classe Funcionario (mãe)
        g.setNome ("Joao Pedro");
        g.setSalario(32450.22);
        
        //Classe Filha (Funcionario)
        g.setUsuario("Joao Pedro");
        g.setSenha("princeso");
        
        Telefonista t = new Telefonista();
        //Classe Telefonica (mãe)
        t.setNome("Liduina Maria");
        t.setSalario(10780.23);
        
        //Classe Filha (Telefoinista)
        t.setEstacaoDeTrabalho(12);
        
        Secretaria s = new Secretaria();
        //Classe Funcionario (mãe)
        s.setNome("Jaqueline Reveroni");
        s.setSalario(6550.99);
        
        //Classe Filha (Secretaria)
        s.setRamal(6677);
        
        //Mostrar os dados Gerente
        System.out.println("===================================");
        System.out.println("GERENTE");
        g.mostrarDados();
        
        //Mostrar os dados Telefonista
        System.out.println("===================================");
        System.out.println("TELEFONISTA");
        t.mostrarDados();
        
        //Mostrar dados Secretaria
        System.out.println("====================================");
        System.out.println("SECRETARIA");
        s.mostrarDados();
    }
}
