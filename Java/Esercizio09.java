import java.util.Scanner;

public class Esercizio09{
	public static void main(String[] args) {
		Scanner tastiera = new Scanner(System.in);
		System.out.println("Ciclo for");

		int sum = 0;

		for(int i = 1; i <= 10; i++){
			System.out.println("Value"+ i);
			sum = sum+tastiera.nextInt();
		}

		int media = sum/10;

		System.out.println("Media value is"+ media);
	}
}