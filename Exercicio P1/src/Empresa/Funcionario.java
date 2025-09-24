package empresa;

public class Funcionario {
    private String nome;
    private double salarioBase;
    private static final int CARGA_MENSAL = 220;

    public Funcionario(String nome, double salarioBase) {
        this.nome = nome;
        this.salarioBase = salarioBase;
    }

    // Getters e Setters
    public String getNome() { return nome; }
    public void setNome(String nome) { this.nome = nome; }

    public double getSalarioBase() { return salarioBase; }
    public void setSalarioBase(double salarioBase) { this.salarioBase = salarioBase; }

    // Valor do Salario por hora
    public double getValorHora() {
        return salarioBase / CARGA_MENSAL;
    }

    // Cálculo de horas extras
    public double calcularHorasExtras(int horas) {
        double valorHoraExtra = getValorHora() * 2.0; // 100% 
        return valorHoraExtra * horas;
    }

    // Salário com adição das horas extras
    public double calcularSalarioFinal(int horasExtras) {
        return salarioBase + calcularHorasExtras(horasExtras);
    }

    // Exibir os dados
    public void mostrarDados(int horasExtras) {
        System.out.println("Funcionário: " + nome);
        System.out.println("Salário Base: R$ " + salarioBase);
        System.out.println("Horas Extras: " + horasExtras);
        System.out.println("Salário Final: R$ " + calcularSalarioFinal(horasExtras));
        System.out.println("-------------------------");
    }
}
