package empresa;

public class TestaFuncionarios {
    public static void main(String[] args) {
        Funcionario f1 = new LiderDeProducao("João Pedro");
        Funcionario f2 = new OperadorJr("Junior");
        Funcionario f3 = new OperadorPl("Pleno");
        Funcionario f4 = new OperadorSn("Sênior");

        f1.mostrarDados(10); // 10 horas extras
        f2.mostrarDados(5);  // 5 horas extras + bonus de 10%
        f3.mostrarDados(12); // 12 horas extras
        f4.mostrarDados(8);  // 8 horas extras
    }
}
