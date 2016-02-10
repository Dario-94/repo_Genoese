import java.util.Scanner;

public class Esercizio02{
	public static void main(String[] args) {
		Scanner tastiera = new Scanner(System.in);
		System.out.println("Quanto misura la base?");

		int base = tastiera.nextInt();

		System.out.println("Quanto misura l'altezza?");

		int height = tastiera.nextInt();

		System.out.println("Quanto misura il perimetro");

		System.out.println(2*(base+height));
	}
}