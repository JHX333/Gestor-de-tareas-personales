import org.junit.jupiter.api.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.WebElement;
import static org.junit.jupiter.api.Assertions.*;

public class UserRegistrationTest extends BaseTest {

    @Test
    public void testUserRegistration() {
        // Navegar a la página de registro
        driver.get("http://tusitio.com/registro");

        // Encontrar los campos del formulario
        WebElement emailField = driver.findElement(By.name("email"));
        WebElement passwordField = driver.findElement(By.name("password"));
        WebElement confirmPasswordField = driver.findElement(By.name("confirm_password"));
        WebElement registerButton = driver.findElement(By.name("register"));

        // Completar el formulario
        emailField.sendKeys("usuario@prueba.com");
        passwordField.sendKeys("ContraseñaSegura123");
        confirmPasswordField.sendKeys("ContraseñaSegura123");

        // Hacer clic en el botón de registro
        registerButton.click();

        // Verificar que la redirección sea la página de inicio
        WebElement welcomeMessage = driver.findElement(By.id("welcomeMessage"));
        assertNotNull(welcomeMessage);
        assertEquals("Bienvenido, usuario@prueba.com", welcomeMessage.getText());
    }
}