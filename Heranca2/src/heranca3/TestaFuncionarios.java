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
        System.out.println("Nome: " + g.getNome());
        System.out.println("Salario: " + g.getSalario());
        System.out.println("Usuario: " + g.getUsuario());
        System.out.println("Senha: " + g.getSenha());
        System.out.println("Bonificação: " + g.calculaBonificacao());
        
        //Mostrar os dados Telefonista
        System.out.println("===================================");
        System.out.println("TELEFONISTA");
        System.out.println("Nome: " + t.getNome());
        System.out.println("Salario: " + t.getSalario());
        System.out.println("Estação de Trabalho: " + t.getEstacaoDeTrabalho());
        System.out.println("Bonificação: " + t.calculaBonificacao());
        
        //Mostrar dados Secretaria
        System.out.println("====================================");
        System.out.println("SECRETARIA");
        System.out.println("Nome: " + s.getNome());
        System.out.println("Salario: " + s.getSalario());
        System.out.println("Ramal: " +s.getRamal());
        System.out.println("Bonificação: " + s.calculaBonificacao());
    }
}
