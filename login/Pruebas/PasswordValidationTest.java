import org.junit.jupiter.api.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.WebElement;
import static org.junit.jupiter.api.Assertions.*;

public class PasswordValidationTest extends BaseTest {

    @Test
    public void testPasswordValidation() {
        // Navegar a la página de registro
        driver.get("http://tusitio.com/registro");

        // Encontrar los campos del formulario
        WebElement passwordField = driver.findElement(By.name("password"));
        WebElement confirmPasswordField = driver.findElement(By.name("confirm_password"));
        WebElement registerButton = driver.findElement(By.name("register"));

        // Intentar registrar con una contraseña débil (menos de 8 caracteres)
        passwordField.sendKeys("123");
        confirmPasswordField.sendKeys("123");
        registerButton.click();

        // Verificar el mensaje de error
        WebElement errorMessage = driver.findElement(By.id("error_message"));
        assertNotNull(errorMessage);
        assertEquals("La contraseña debe tener al menos 8 caracteres.", errorMessage.getText());
    }
}