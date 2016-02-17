import java.util.Scanner;

public class Esercizio10{
	public static void main(String[] args) {
		Scanner tastiera = new Scanner(System.in);
		System.out.println("Ciclo for");

		int max = 1;
		int min = Integer.MAX_VALUE;

		for(int i = 1; i <= 10; i++){
			System.out.println("Value"+ i);
			max = tastiera.nextInt();
			if (max < min) {
				min = max;
			} 
		}
		System.out.println("Value"+ min);
	}
}